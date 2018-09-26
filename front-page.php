<?php
/*
 * Template Name: 3 Widget Areas
 */
get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <div id="front-widgets">
                <ul id="front-widget-area-1">
					<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'front-1' ) ) : ?>
					<?php endif; ?>
                </ul>
                <ul id="front-widget-area-2">
					<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'front-2' ) ) : ?>
					<?php endif; ?>
                </ul>
                <ul id="front-widget-area-3">
					<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'front-3' ) ) : ?>
                    <?php endif; ?>
                </ul>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();