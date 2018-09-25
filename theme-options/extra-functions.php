<?php
/**
 * Limit the excerpt length.
 *
 * @param int $limit
 *
 * @return string
 */
function custom_excerpt_length( $length ) {
	switch ( get_post_type() ) {
		case "post":
			return 50;
		case "project":
			return 25;
		default:
			return $length;
	}
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999);

function the_post_categories_as_anchor() {
	$categories = get_the_category();
	echo "<br> Categories: ";
	foreach ($categories as $category){
		echo "<a href=\"" . site_url() . "/category/" . $category->slug . "\">$category->name</a>";
	}
}