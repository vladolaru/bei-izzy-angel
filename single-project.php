<?php
/**
 * The template for displaying all single projects
 *
 * @package Izzy
 */

get_header();
require_once get_template_directory() . '/project/class-Gallery.php';
$gallery = new Gallery(get_field('gallery'));
?>
    <?php echo $gallery->generateMySlides(); ?>
	<div id="primary" class="content-area main-content">
		<main id="main" class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></h1>

            <div class="customer">
                <?php the_field('name'); ?>
                <?php the_field('age'); ?>
                <?php the_field('address'); ?>
            </div>

            <div class="period">
            <?php the_field('begin'); ?>
            <?php the_field('end'); echo get_theme_mod('setting_demo'); ?>
            </div>

            <?php the_content(); ?>

        <?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php 
get_sidebar();
get_footer();
