<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Izzy
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    </header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		if (get_theme_mod('post-featured-image-archives')) {
			the_post_thumbnail( 'medium', ['class' => 'post-archive-thumbnail'] );
		}
		//the_title( '<h2 class="entry-title" style="clear : none"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>
        <h2 class="entry-title" style="clear : none">
            <a href=" <?php echo esc_url( get_permalink() ) ?> " rel="bookmark">
				<?php echo __(strip_tags( get_the_title() ), 'izzy' ); ?>
            </a>
        </h2>
        <div class="post-categories">
			<?php
			if(get_theme_mod('post-categories-archives')) {
				the_post_categories_as_anchor();
			}
			if(get_theme_mod('post-date-archives')) {
				if(get_theme_mod('post-categories-archives')) {
					echo ' - ' . get_the_date();
				} else {
				    echo get_the_date();
                }
			}
			?>
        </div>
		<?php
		the_excerpt();

		if(get_theme_mod('post-author-archives')) {
		    echo "<br><br>By: " . get_the_author();
        }
		?>

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
