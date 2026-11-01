<?php
/**
 * Refresh already-published quizzes in place from a build_module.py payload.
 * Keeps quiz, question and answer IDs (and answer `value` keys); rewrites question title/content,
 * hint, explanation, answer titles and which answer is correct. Skips any quiz or question whose
 * shape (question count, option count) differs from the payload, and reports it.
 *
 * Dry run:  wp eval-file refresh_quizzes.php <payload.json> --user=118
 * Write:    wp eval-file refresh_quizzes.php <payload.json> apply --user=118
 */
global $wpdb;
$payload = json_decode( file_get_contents( $args[0] ), true ) or WP_CLI::error( 'Bad payload' );
$apply   = ( $args[1] ?? '' ) === 'apply';
$qq      = $wpdb->prefix . 'learnpress_quiz_questions';
$qa      = $wpdb->prefix . 'learnpress_question_answers';
$changed = 0;

foreach ( $payload as $item ) {
	if ( empty( $item['quiz'] ) ) {
		continue;
	}
	$title = preg_replace( '/^M0?(\d+)\.L0?(\d+) Quiz — /u', '$1.$2 Quiz: ', $item['quiz']['title'] );
	$quiz_id = (int) $wpdb->get_var( $wpdb->prepare(
		"SELECT ID FROM $wpdb->posts WHERE post_type = 'lp_quiz' AND post_status = 'publish' AND post_title = %s", $title
	) );
	if ( ! $quiz_id ) {
		WP_CLI::warning( "No published quiz titled \"$title\"; skipped." );
		continue;
	}
	$ids = $wpdb->get_col( $wpdb->prepare( "SELECT question_id FROM $qq WHERE quiz_id = %d ORDER BY question_order", $quiz_id ) );
	$new = $item['quiz']['questions'];
	if ( count( $ids ) !== count( $new ) ) {
		WP_CLI::warning( "Quiz $quiz_id has " . count( $ids ) . ' questions, payload ' . count( $new ) . '; skipped.' );
		continue;
	}
	foreach ( $ids as $n => $qid ) {
		$q       = $new[ $n ];
		$answers = $wpdb->get_results( $wpdb->prepare( "SELECT question_answer_id, title, is_true FROM $qa WHERE question_id = %d ORDER BY `order`", $qid ) );
		if ( count( $answers ) !== count( $q['options'] ) ) {
			WP_CLI::warning( "Question $qid: " . count( $answers ) . ' answers vs ' . count( $q['options'] ) . '; skipped.' );
			continue;
		}
		$post  = get_post( $qid );
		$diffs = [];
		if ( $post->post_title !== $q['title'] ) $diffs[] = 'title';
		if ( $post->post_content !== $q['content'] ) $diffs[] = 'content';
		if ( get_post_meta( $qid, '_lp_hint', true ) !== $q['hint'] ) $diffs[] = 'hint';
		if ( get_post_meta( $qid, '_lp_explanation', true ) !== $q['explanation'] ) $diffs[] = 'explanation';
		foreach ( $answers as $k => $a ) {
			if ( $a->title !== $q['options'][ $k ]['title'] || (string) $a->is_true !== $q['options'][ $k ]['is_true'] ) {
				$diffs[] = 'answers';
				break;
			}
		}
		if ( ! $diffs ) {
			continue;
		}
		$changed++;
		$old_true = array_search( 'yes', array_column( (array) $answers, 'is_true' ), true );
		$new_true = array_search( 'yes', array_column( $q['options'], 'is_true' ), true );
		WP_CLI::log( sprintf( '%s quiz %d Q%d (%d): %s; correct %s→%s', $apply ? 'UPDATE' : 'would update',
			$quiz_id, $n + 1, $qid, implode( ',', $diffs ), chr( 97 + (int) $old_true ), chr( 97 + (int) $new_true ) ) );
		if ( ! $apply ) {
			continue;
		}
		wp_update_post( [ 'ID' => $qid, 'post_title' => $q['title'], 'post_content' => $q['content'] ] );
		update_post_meta( $qid, '_lp_hint', $q['hint'] );
		update_post_meta( $qid, '_lp_explanation', $q['explanation'] );
		foreach ( $answers as $k => $a ) {
			$wpdb->update( $qa,
				[ 'title' => $q['options'][ $k ]['title'], 'is_true' => $q['options'][ $k ]['is_true'] ],
				[ 'question_answer_id' => $a->question_answer_id ] );
		}
		clean_post_cache( $qid );
	}
}
if ( $apply ) {
	wp_cache_flush();
}
WP_CLI::success( ( $apply ? 'Updated' : 'Would update' ) . " $changed questions." );
