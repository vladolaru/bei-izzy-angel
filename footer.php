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

<div id="footer-widget1">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
<?php endif; ?>
</div>

<div id="footer-widget2">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
<?php endif; ?>
</div>

<div id="footer-widget3">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
<?php endif; ?>
</div>
</div>
<div style="clear-both"></div>

<?php wp_footer(); ?>

</body>
</html>
