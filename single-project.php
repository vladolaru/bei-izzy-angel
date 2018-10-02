<?php
/**
 * The template for displaying all single projects
 *
 * @package Izzy
 */

get_header();
require_once get_template_directory() . '/project/class-Gallery.php';
try {
	$gallery = new Gallery( get_field( 'gallery' ) );
} catch ( Exception $e ) {
	$gallery = null;
}
?>
<?php
if ( $gallery->imagesExists() ) {
	echo $gallery->generateMySlides();
}
?>
    <div id="primary" class="content-area main-content">
        <main id="main" class="site-main">

			<?php while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></h1>

                <div class="customer">
                    <div class="single-project-name">
						<?php the_field( 'name' ); ?>
                    </div>
                    <div class="single-project-age">
						<?php the_field( 'age' ); ?>
                    </div>
                    <div class="single-project-address">
						<?php the_field( 'address' ); ?>
                    </div>
                </div>

                <div class="period">
                    <div class="single-project-begin">
						<?php the_field( 'begin' ); ?>
                    </div>
                    <div class="single-project-end">
						<?php the_field( 'end' ); ?>
                    </div>
                </div>

				<?php the_content(); ?>

			<?php endwhile; // end of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_sidebar();
get_footer();
