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

					$categories = get_the_category();
					if ( ! empty( $categories ) ) {
						?>
                        <div class="categories-section">
							<?php
							_e( 'Categories: ', 'izzy' );
							?>
                            <div class="single-post-categories">
								<?php
								foreach ( $categories as $category ) {
									$category_link = get_category_link( $category->term_id );
									echo '<a href="' . esc_url( $category_link ) . '" title="' . esc_attr( $category->slug ) . '">' . esc_html( $category->name ) . "</a>";
								}
								?>
                            </div>
                        </div>
						<?php
					}
					?>
                </div>

				<?php if ( get_theme_mod( 'post-featured-image-on-single' ) ) { ?>
                    <div class="single-post-featured-image">
						<?php the_post_thumbnail( 'full', [ 'class' => 'post-single-thumbnail' ] ); ?>
                    </div>
					<?php
				}

				the_content();

				if ( get_theme_mod( 'post-author-box-single' ) ) {
					get_template_part( 'template-parts/content', 'author-box' );
				}

				the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // end of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_sidebar();
get_footer();
