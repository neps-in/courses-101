<?php
/**
 * Create one module from scratch in a course that has no lesson posts yet (webdev-101 → course 2606):
 * a new section, published lessons, a quiz after each lesson, laid out in order (lesson, quiz, …, capstone).
 *
 * Build the payload with lesson ID 0:  COURSE=webdev-101 python3 build_module.py <N> 0 mNN.json
 * Dry run:  wp eval-file create_module.php mNN.json <course_id> <section_order> "<section name>" "<description>" --user=118
 * Write:    same, plus a final argument  apply
 *
 * Refuses to run if the course already has a section with this name, or if any lesson or quiz title already exists.
 * Content is passed through wp_slash() because wp_insert_post() unslashes (backslashes would vanish otherwise).
 */
use LearnPress\Models\CourseSectionModel;
use LearnPress\Models\QuizPostModel;

$payload = json_decode( file_get_contents( $args[0] ?? '' ), true ) or WP_CLI::error( 'Bad payload' );
$course_id     = (int) ( $args[1] ?? 0 );
$section_order = (int) ( $args[2] ?? 0 );
$section_name  = trim( $args[3] ?? '' );
$section_desc  = trim( $args[4] ?? '' );
$apply         = 'apply' === ( $args[5] ?? '' );

if ( LP_COURSE_CPT !== get_post_type( $course_id ) || ! $section_order || ! $section_name ) {
	WP_CLI::error( 'Usage: <payload> <course_id> <section_order> "<name>" "<description>" [apply]' );
}

global $wpdb;
$sections = $wpdb->prefix . 'learnpress_sections';

// Guards: no duplicate section, no existing lesson/quiz with the same title.
if ( $wpdb->get_var( $wpdb->prepare( "SELECT section_id FROM $sections WHERE section_course_id = %d AND section_name = %s", $course_id, $section_name ) ) ) {
	WP_CLI::error( "Course $course_id already has a section named \"$section_name\"." );
}
$taken = $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM $sections WHERE section_course_id = %d AND section_order = %d", $course_id, $section_order ) );
if ( $taken ) {
	WP_CLI::error( "Section order $section_order is already used in course $course_id." );
}
foreach ( $payload as $item ) {
	if ( (int) $item['lesson_id'] ) {
		WP_CLI::error( 'Payload has lesson IDs; build it with first ID 0 for a new module.' );
	}
	$checks = [ [ $item['title'], LP_LESSON_CPT ] ];
	if ( ! empty( $item['quiz'] ) ) {
		$checks[] = [ $item['quiz']['site_title'], LP_QUIZ_CPT ];
	}
	foreach ( $checks as [ $title, $type ] ) {
		$dup = $wpdb->get_var( $wpdb->prepare(
			"SELECT ID FROM {$wpdb->posts} WHERE post_type = %s AND post_title = %s AND post_status <> 'trash'", $type, $title
		) );
		if ( $dup ) {
			WP_CLI::error( "$type \"$title\" already exists (ID $dup)." );
		}
	}
}

WP_CLI::log( "Course $course_id: " . get_the_title( $course_id ) );
WP_CLI::log( "Section (order $section_order): $section_name — $section_desc" );
foreach ( $payload as $item ) {
	WP_CLI::log( sprintf( '  lesson  %s  [%s, %d chars]', $item['title'], $item['duration'], strlen( $item['content'] ) ) );
	if ( ! empty( $item['quiz'] ) ) {
		WP_CLI::log( sprintf( '  quiz    %s  [%d questions]', $item['quiz']['site_title'], count( $item['quiz']['questions'] ) ) );
	}
}
if ( ! $apply ) {
	WP_CLI::success( 'Dry run only. Add "apply" to write.' );
	return;
}

$section                      = new CourseSectionModel();
$section->section_course_id   = $course_id;
$section->section_name        = $section_name;
$section->section_description = $section_desc;
$section->section_order       = $section_order;
$section->save();
$section_id = $section->get_section_id() or WP_CLI::error( 'Section not created.' );
WP_CLI::log( "Section $section_id created." );

$items = [];
foreach ( $payload as $item ) {
	$lesson_id = wp_insert_post( wp_slash( [
		'post_type'    => LP_LESSON_CPT,
		'post_title'   => $item['title'],
		'post_content' => $item['content'],
		'post_status'  => 'publish',
		'post_author'  => get_current_user_id(),
	] ), true );
	if ( is_wp_error( $lesson_id ) ) {
		WP_CLI::error( 'Lesson "' . $item['title'] . '": ' . $lesson_id->get_error_message() );
	}
	update_post_meta( $lesson_id, '_lp_duration', $item['duration'] );
	$items[] = [ 'id' => $lesson_id, 'type' => LP_LESSON_CPT ];
	WP_CLI::log( "Lesson $lesson_id: {$item['title']}" );

	if ( empty( $item['quiz'] ) ) {
		continue;
	}
	$quiz               = new QuizPostModel();
	$quiz->post_title   = wp_slash( $item['quiz']['site_title'] );
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
			'question_title'   => wp_slash( $q['title'] ),
			'question_type'    => 'single_choice',
			'question_content' => wp_slash( $q['content'] ),
			'question_options' => $q['options'],
		] );
		update_post_meta( $qq->question_id, '_lp_mark', 1 );
		update_post_meta( $qq->question_id, '_lp_hint', wp_slash( $q['hint'] ) );
		update_post_meta( $qq->question_id, '_lp_explanation', wp_slash( $q['explanation'] ) );
	}
	$items[] = [ 'id' => $quiz_id, 'type' => LP_QUIZ_CPT ];
	WP_CLI::log( "  Quiz $quiz_id: {$item['quiz']['site_title']} (" . count( $item['quiz']['questions'] ) . ' questions)' );
}

CourseSectionModel::find( $section_id, $course_id, false )->add_items( [ 'items' => $items ] );
WP_CLI::success( "Section $section_id: " . count( $items ) . ' items attached in order.' );
