<?php
/**
 * Template part for displaying projects
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Izzy
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
    </header><!-- .entry-header -->
	<?php
	the_post_thumbnail( 'medium', [ 'class' => 'project-archive-thumbnail' ] );
	//the_title( '<h2 class="entry-title" style="clear : none"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>');
	?>
    <h2 class="entry-title" style="clear : none">
        <a href=" <?php echo esc_url( get_permalink() ) ?> " rel="bookmark">
            <?php echo __(strip_tags( get_the_title() ), 'izzy'); ?>
        </a>
    </h2>
	<?php if ( get_theme_mod( 'project-categories-archives' ) ) { ?>
        <div class="project-categories">
			<?php
			$taxonomy        = 'project-category';
			$post_categories = get_the_terms( get_the_ID(), $taxonomy );
			if ( $post_categories ) {
				$cats = array();
				echo 'Categories: ';
				foreach ( $post_categories as $c ) {
					$cat = get_category( $c );
					echo "<a href=\"" . site_url() . '/' . $taxonomy . '/' . $cat->slug . "\">" . __(strip_tags( $cat->name )) . "</a>";
				}
			}
			?>
        </div>
	<?php }

	the_excerpt(); ?>

    <div class="entry-content">
		<?php if ( get_theme_mod( 'project-customer-archives' ) ) { ?>
            <div class="customer">
				<?php echo 'Customer: ';
				//the_field( 'name' );
				echo __(strip_tags( get_field( 'name' ) ), 'izzy' );
				?>
            </div>
		<?php } ?>

		<?php if ( get_theme_mod( 'project-year-archives' ) ) { ?>
            <div class="period">
				<?php
				echo 'from: ';
				the_field( 'begin' );
				echo '<br>to: ';
				the_field( 'end' );
				?>
            </div>
		<?php } ?>
		<?php
		// wp_link_pages( array(
		// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'izzy' ),
		// 	'after'  => '</div>',
		// ) );
		?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
		<?php izzy_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
