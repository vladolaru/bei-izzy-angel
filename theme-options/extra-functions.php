<?php
/**
 * Limit the excerpt length.
 *
 * @param int $length
 *
 * @return int
 */
function izzy_custom_excerpt_length( $length ) {
	switch ( get_post_type() ) {
		case "post": {
			$length = 50;
			break;
		}
		case "project": {
			$length = 25;
			break;
		}
	}
	return $length;
}

add_filter( 'excerpt_length', 'izzy_custom_excerpt_length', 10 );