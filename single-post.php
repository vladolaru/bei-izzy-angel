<?php
/**
 * The template for displaying all single posts
 *
 * @package Izzy
 */

get_header();
?>
    <div id="primary" class="content-area main-content">
        <main id="main" class="site-main">

			<?php while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></h1>

                <div class="post-meta-data">
					<?php
					echo get_the_author() . ' - ' . get_the_date();
					the_post_categories_as_anchor();

					?>
                </div>

				<?php if ( get_theme_mod( 'post-show-featured-image-on-single' ) ) { ?>
                    <div class="single-post-featured-image">
						<?php the_post_thumbnail( 'full', [ 'class' => 'post-single-thumbnail' ] ); ?>
                    </div>
				<?php } ?>

				<?php the_content(); ?>

				<?php
				if ( get_theme_mod( 'post-show-author-box-on-single' ) ) {
					include get_template_directory() . '/components/custom-author-box.php';
				}
				?>

				<?php
				the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
				?>
			<?php endwhile; // end of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_sidebar();
get_footer();
