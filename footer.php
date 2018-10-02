<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Izzy
 */

?>

<div id="footer-widgets">

    <div id="footer-menu">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-3',
			'menu_id'        => 'footer-menu',
		) );
		?>
    </div>
    <ul id="footer-widget1">
		<?php dynamic_sidebar( 'footer-1' ) ?>
    </ul>

    <ul id="footer-widget2">
		<?php dynamic_sidebar( 'footer-2' ) ?>
    </ul>
</div>
<?php wp_footer(); ?>
</body>
</html>
