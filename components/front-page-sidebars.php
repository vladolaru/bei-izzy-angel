<?php
register_sidebar(array(
	'name' => 'Front-Page Widget 1',
	'id'        => 'front-1',
	'description' => 'First front-page widget area',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));
register_sidebar(array(
	'name' => 'Front-Page Widget 2',
	'id'        => 'front-2',
	'description' => 'Second front-page widget area',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));
register_sidebar(array(
	'name' => 'Front-Page Widget 3',
	'id'        => 'front-3',
	'description' => 'Third front-page widget area',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));