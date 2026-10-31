<?php
/**
 * Fill + publish M01 lessons, create M01 quizzes, and attach all 53 lessons to course 2608.
 * Run: wp eval-file upload_m01.php <payload.json> --user=118
 */
use LearnPress\Models\CourseSectionModel;
use LearnPress\Models\QuizPostModel;

const COURSE_ID = 2608;
const SECTIONS  = [ 1 => 32, 2 => 33, 3 => 34, 4 => 35, 5 => 36, 6 => 37, 7 => 38, 8 => 39, 9 => 40 ];

$payload = json_decode( file_get_contents( $args[0] ), true ) or WP_CLI::error( 'Bad payload' );

global $wpdb;
$attached = (int) $wpdb->get_var( $wpdb->prepare(
	"SELECT COUNT(*) FROM {$wpdb->prefix}learnpress_section_items si
	 JOIN {$wpdb->prefix}learnpress_sections s ON s.section_id = si.section_id WHERE s.section_course_id = %d",
	COURSE_ID
) );
if ( $attached ) {
	WP_CLI::error( "Course already has $attached items attached; refusing to run twice." );
}

// 1. M01: lesson content + publish, quiz per lesson.
$m01_items = [];
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
	$m01_items[] = [ 'id' => $lesson_id, 'type' => LP_LESSON_CPT ];
	WP_CLI::log( "Lesson $lesson_id published (" . get_the_title( $lesson_id ) . ')' );

	if ( empty( $item['quiz'] ) ) {
		continue;
	}
	$quiz_title = preg_replace( '/^M0(\d)\.L0(\d) Quiz — /u', '$1.$2 Quiz: ', $item['quiz']['title'] );

	$quiz              = new QuizPostModel();
	$quiz->post_title  = $quiz_title;
	$quiz->post_status = 'publish';
	$quiz->post_author = get_current_user_id();
	$quiz->post_type   = LP_QUIZ_CPT;
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
		$qq          = $quiz->create_question_and_add( [
			'question_title'   => $q['title'],
			'question_type'    => 'single_choice',
			'question_content' => $q['content'],
			'question_options' => $q['options'],
		] );
		$question_id = $qq->question_id;
		update_post_meta( $question_id, '_lp_mark', 1 );
		update_post_meta( $question_id, '_lp_hint', $q['hint'] );
		update_post_meta( $question_id, '_lp_explanation', $q['explanation'] );
	}
	$m01_items[] = [ 'id' => $quiz_id, 'type' => LP_QUIZ_CPT ];
	WP_CLI::log( "  Quiz $quiz_id: $quiz_title (" . count( $item['quiz']['questions'] ) . ' questions)' );
}

// 2. Attach M01 in order: lesson, quiz, lesson, quiz, ..., capstone.
CourseSectionModel::find( SECTIONS[1], COURSE_ID, false )->add_items( [ 'items' => $m01_items ] );
WP_CLI::log( 'M01 section: ' . count( $m01_items ) . ' items attached' );

// 3. Attach the remaining draft lessons (M02–M09) by their "N.x" title prefix.
$drafts = get_posts( [
	'post_type'   => LP_LESSON_CPT,
	'post__in'    => range( 2621, 2667 ),
	'post_status' => 'any',
	'orderby'     => 'ID',
	'order'       => 'ASC',
	'numberposts' => -1,
] );
$by_module = [];
foreach ( $drafts as $p ) {
	if ( ! preg_match( '/^(\d)\.\d+ /', $p->post_title, $m ) || ! isset( SECTIONS[ (int) $m[1] ] ) ) {
		WP_CLI::error( "Unexpected lesson title: {$p->ID} {$p->post_title}" );
	}
	$by_module[ (int) $m[1] ][] = [ 'id' => $p->ID, 'type' => LP_LESSON_CPT ];
}
foreach ( $by_module as $module => $items ) {
	CourseSectionModel::find( SECTIONS[ $module ], COURSE_ID, false )->add_items( [ 'items' => $items ] );
	WP_CLI::log( "M0$module section: " . count( $items ) . ' draft lessons attached' );
}
WP_CLI::success( 'Done.' );
