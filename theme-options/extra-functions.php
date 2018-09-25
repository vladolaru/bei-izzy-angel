<?php
/**
 * Limit the excerpt length.
 *
 * @param int $limit
 *
 * @return string
 */
function limited_excerpt($limit) {
	$content = get_the_excerpt();
	return wp_trim_words( $content , $limit );
}

function the_post_categories_as_anchor() {
	$categories = get_the_category();
	echo "<br> Categories: ";
	foreach ($categories as $category){
		echo "<a href=\"" . site_url() . "/category/" . $category->slug . "\">$category->name</a>";
	}
}