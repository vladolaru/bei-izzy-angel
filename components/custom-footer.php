<?php
register_sidebar(array(
	'name' => 'Footer Widget 1',
	'id'        => 'footer-1',
	'description' => 'First footer widget area',
	'before_widget' => '<div id="footer-widget1">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
	));
	
register_sidebar(array(
	'name' => 'Footer Widget 2',
	'id'        => 'footer-2',
	'description' => 'Second footer widget area',
	'before_widget' => '<div id="footer-widget2">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
	));