<?php
// Verify course 2606: every section's items vs payload (title, status, content, duration, quiz answers).
global $wpdb;
$D = $args[0];
$map = [ 49 => 'wd-start.json', 41 => 'wd-m01.json', 42 => 'wd-m02.json', 43 => 'wd-m03.json', 44 => 'wd-m04.json',
	45 => 'wd-m05.json', 46 => 'wd-m06.json', 47 => 'wd-m07.json', 48 => 'wd-m08.json', 50 => 'wd-final.json' ];
$bad = 0; $nq = 0; $nl = 0;
foreach ( $map as $sid => $file ) {
	$P     = json_decode( file_get_contents( "$D/$file" ), true );
	$items = $wpdb->get_results( $wpdb->prepare( "SELECT item_id, item_type FROM {$wpdb->prefix}learnpress_section_items WHERE section_id=%d ORDER BY item_order", $sid ) );
	$exp   = [];
	foreach ( $P as $p ) { $exp[] = [ 'lp_lesson', $p ]; if ( $p['quiz'] ) { $exp[] = [ 'lp_quiz', $p ]; } }
	if ( count( $items ) !== count( $exp ) ) { echo "Section $sid: " . count( $items ) . " items, expected " . count( $exp ) . "\n"; $bad++; continue; }
	foreach ( $items as $i => $it ) {
		[ $type, $p ] = $exp[ $i ];
		$post = get_post( $it->item_id );
		$err  = [];
		if ( $it->item_type !== $type ) $err[] = "type";
		if ( 'publish' !== $post->post_status ) $err[] = "status {$post->post_status}";
		if ( 'lp_lesson' === $type ) {
			$nl++;
			if ( html_entity_decode( $post->post_title ) !== $p['title'] ) $err[] = "title";
			if ( $post->post_content !== $p['content'] ) $err[] = "content";
			if ( get_post_meta( $post->ID, '_lp_duration', true ) !== $p['duration'] ) $err[] = "duration";
		} else {
			$q   = $p['quiz'];
			$qs  = $wpdb->get_col( $wpdb->prepare( "SELECT question_id FROM {$wpdb->prefix}learnpress_quiz_questions WHERE quiz_id=%d ORDER BY question_order", $post->ID ) );
			if ( count( $qs ) !== count( $q['questions'] ) ) $err[] = "question count";
			foreach ( $qs as $k => $qid ) {
				$nq++;
				$src  = $q['questions'][ $k ];
				$ans  = $wpdb->get_col( $wpdb->prepare( "SELECT is_true FROM {$wpdb->prefix}learnpress_question_answers WHERE question_id=%d ORDER BY `order`, question_answer_id", $qid ) );
				$want = array_map( fn( $o ) => $o['is_true'] === 'yes' ? 'yes' : '', $src['options'] );
				$have = array_map( fn( $a ) => $a === 'yes' ? 'yes' : '', $ans );
				if ( $want !== $have ) $err[] = "Q" . ( $k + 1 ) . " answers";
				if ( get_post_meta( $qid, '_lp_hint', true ) !== $src['hint'] ) $err[] = "Q" . ( $k + 1 ) . " hint";
				if ( get_post_meta( $qid, '_lp_explanation', true ) !== $src['explanation'] ) $err[] = "Q" . ( $k + 1 ) . " explanation";
				if ( get_post( $qid )->post_content !== $src['content'] ) $err[] = "Q" . ( $k + 1 ) . " content";
			}
		}
		if ( $err ) { $bad++; echo "Section $sid item {$it->item_id} ({$post->post_title}): " . implode( ', ', $err ) . "\n"; }
	}
}
echo "Checked $nl lessons, $nq questions; problems: $bad\n";
echo "Placement quiz 3516 passing grade: " . get_post_meta( 3516, '_lp_passing_grade', true ) . ", duration: " . get_post_meta( 3516, '_lp_duration', true ) . "\n";
echo "A regular quiz (3182) passing grade: " . get_post_meta( 3182, '_lp_passing_grade', true ) . "\n";
