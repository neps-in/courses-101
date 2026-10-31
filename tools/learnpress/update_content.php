<?php
$d = json_decode( file_get_contents( $args[0] ), true );
foreach ( $d as $i ) {
	$r = wp_update_post( [ 'ID' => $i['lesson_id'], 'post_content' => $i['content'] ], true );
	echo $i['lesson_id'], ' ', is_wp_error( $r ) ? $r->get_error_message() : 'updated',
		' links=', substr_count( get_post_field( 'post_content', $i['lesson_id'] ), '<a href' ),
		' status=', get_post_status( $i['lesson_id'] ), "\n";
}
