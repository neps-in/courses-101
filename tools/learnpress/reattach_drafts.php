<?php
/**
 * Re-attach draft lessons (title prefix "N.x") to their module sections, after LearnPress pruned them
 * on a course save. Only attaches lessons that aren't in the course yet.
 * Run: wp eval-file reattach_drafts.php --user=118
 */
use LearnPress\Models\CourseSectionModel;

const COURSE_ID = 2608;
const SECTIONS  = [ 1 => 32, 2 => 33, 3 => 34, 4 => 35, 5 => 36, 6 => 37, 7 => 38, 8 => 39, 9 => 40 ];

global $wpdb;
$attached = array_map( 'intval', $wpdb->get_col( $wpdb->prepare(
	"SELECT si.item_id FROM {$wpdb->prefix}learnpress_section_items si
	 JOIN {$wpdb->prefix}learnpress_sections s ON s.section_id = si.section_id WHERE s.section_course_id = %d",
	COURSE_ID
) ) );

$drafts = get_posts( [
	'post_type'   => LP_LESSON_CPT,
	'post__in'    => range( 2615, 2667 ),
	'post_status' => 'draft',
	'orderby'     => 'ID',
	'order'       => 'ASC',
	'numberposts' => -1,
] );
$by_module = [];
foreach ( $drafts as $p ) {
	if ( in_array( $p->ID, $attached, true ) ) {
		continue;
	}
	if ( ! preg_match( '/^(\d)\.\d+ /', $p->post_title, $m ) || ! isset( SECTIONS[ (int) $m[1] ] ) ) {
		WP_CLI::error( "Unexpected lesson title: {$p->ID} {$p->post_title}" );
	}
	$by_module[ (int) $m[1] ][] = [ 'id' => $p->ID, 'type' => LP_LESSON_CPT ];
}
foreach ( $by_module as $module => $items ) {
	CourseSectionModel::find( SECTIONS[ $module ], COURSE_ID, false )->add_items( [ 'items' => $items ] );
	WP_CLI::log( "M0$module: " . count( $items ) . ' draft lessons attached' );
}
WP_CLI::success( 'Done.' );
