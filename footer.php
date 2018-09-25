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

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
<?php endif; ?>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
<?php endif; ?>


<?php wp_footer(); ?>
</div>
</body>
</html>
