<?php
/**
 * Fill + publish one module's lessons, create a quiz after each lesson, and lay out its section in order:
 * lesson, quiz, lesson, quiz, ..., capstone.
 * Run: wp eval-file upload_module.php <payload.json> <section_id> --user=118
 */
use LearnPress\Models\CourseSectionModel;
use LearnPress\Models\QuizPostModel;

const COURSE_ID = 2608;

$payload    = json_decode( file_get_contents( $args[0] ), true ) or WP_CLI::error( 'Bad payload' );
$section_id = (int) ( $args[1] ?? 0 ) or WP_CLI::error( 'Section ID required' );

global $wpdb;
$lesson_ids = array_map( fn( $i ) => (int) $i['lesson_id'], $payload );

// Refuse to run twice: no published lesson from this payload, no quiz with the same title.
foreach ( $payload as $item ) {
	if ( 'publish' === get_post_status( $item['lesson_id'] ) ) {
		WP_CLI::error( "Lesson {$item['lesson_id']} is already published; refusing to run twice." );
	}
}

// Detach this module's draft lessons from the section (if attached) so the new order can be laid out.
$ids_sql = implode( ',', $lesson_ids );
$wpdb->query( $wpdb->prepare(
	"DELETE FROM {$wpdb->prefix}learnpress_section_items WHERE section_id = %d AND item_id IN ($ids_sql)",
	$section_id
) );
$other = (int) $wpdb->get_var( $wpdb->prepare(
	"SELECT COUNT(*) FROM {$wpdb->prefix}learnpress_section_items WHERE section_id = %d", $section_id
) );
if ( $other ) {
	WP_CLI::error( "Section $section_id still has $other other items; check it in wp-admin first." );
}

$items = [];
foreach ( $payload as $item ) {
	$lesson_id = (int) $item['lesson_id'];
	$res       = wp_update_post( [
		'ID'           => $lesson_id,
		'post_content' => $item['content'],
		'post_status'  => 'publish',
	], true );
	if ( is_wp_error( $res ) ) {
		WP_CLI::error( "Lesson $lesson_id: " . $res->get_error_message() );
	}
	update_post_meta( $lesson_id, '_lp_duration', $item['duration'] );
	$items[] = [ 'id' => $lesson_id, 'type' => LP_LESSON_CPT ];
	WP_CLI::log( "Lesson $lesson_id published (" . get_the_title( $lesson_id ) . ')' );

	if ( empty( $item['quiz'] ) ) {
		continue;
	}
	$quiz_title = preg_replace( '/^M0?(\d+)\.L0?(\d+) Quiz — /u', '$1.$2 Quiz: ', $item['quiz']['title'] );
	if ( get_page_by_title( $quiz_title, OBJECT, LP_QUIZ_CPT ) ) {
		WP_CLI::error( "Quiz \"$quiz_title\" already exists." );
	}

	$quiz               = new QuizPostModel();
	$quiz->post_title   = $quiz_title;
	$quiz->post_status  = 'publish';
	$quiz->post_author  = get_current_user_id();
	$quiz->post_type    = LP_QUIZ_CPT;
	$quiz->post_content = '<p>Check your understanding. Every question has a hint, and you see the explanation after each answer. Retake as often as you like.</p>';
	$quiz->save();
	$quiz_id = $quiz->get_id();

	foreach ( [
		'_lp_duration'             => '10 minute',
		'_lp_passing_grade'        => 70,
		'_lp_instant_check'        => 'yes',
		'_lp_negative_marking'     => 'no',
		'_lp_minus_skip_questions' => 'no',
		'_lp_retake_count'         => -1,
		'_lp_pagination'           => 1,
		'_lp_review'               => 'yes',
		'_lp_show_correct_review'  => 'yes',
	] as $k => $v ) {
		update_post_meta( $quiz_id, $k, $v );
	}

	foreach ( $item['quiz']['questions'] as $q ) {
		$qq = $quiz->create_question_and_add( [
			'question_title'   => $q['title'],
			'question_type'    => 'single_choice',
			'question_content' => $q['content'],
			'question_options' => $q['options'],
		] );
		update_post_meta( $qq->question_id, '_lp_mark', 1 );
		update_post_meta( $qq->question_id, '_lp_hint', $q['hint'] );
		update_post_meta( $qq->question_id, '_lp_explanation', $q['explanation'] );
	}
	$items[] = [ 'id' => $quiz_id, 'type' => LP_QUIZ_CPT ];
	WP_CLI::log( "  Quiz $quiz_id: $quiz_title (" . count( $item['quiz']['questions'] ) . ' questions)' );
}

CourseSectionModel::find( $section_id, COURSE_ID, false )->add_items( [ 'items' => $items ] );
WP_CLI::success( "Section $section_id: " . count( $items ) . ' items attached in order.' );
