<?php
/**
 * Limit the excerpt length.
 *
 * @param int $limit
 *
 * @return string
 */
function izzy_custom_excerpt_length( $length ) {
	switch ( get_post_type() ) {
		case "post":
			return 50;
		case "project":
			return 25;
		default:
			return $length;
	}
}

add_filter( 'excerpt_length', 'izzy_custom_excerpt_length', 20 );

function the_post_categories_as_anchor() {
	$categories = get_the_category();
	echo "<br> Categories: ";
	foreach ( $categories as $category ) {
		echo "<a href=\"" . site_url() . "/category/" . $category->slug . "\">" . __( strip_tags( $category->name ), 'izzy' ) . "</a>";
	}
}