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

	<div id="primary" class="content-area main-content">
		<main id="main" class="site-main">

		<?php while ( have_posts() ) :
            the_post();
            echo $gallery->generateMySlides();
            echo $gallery->generateNavigationButtons();
            echo $gallery->generateDots();
            ?>
            <h1><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></h1>

            <div class="customer">
                <?php the_field('name'); ?>
                <?php the_field('age'); ?>
                <?php the_field('address'); ?>
            </div>

            <div class="period">
            <?php the_field('begin'); ?>
            <?php the_field('end'); ?>
            </div>

            <?php the_content(); ?>

        <?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php 
get_sidebar();
get_footer();
