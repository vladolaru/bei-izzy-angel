<?php

get_header();
?>

    <div id="primary" class="content-area main-content">
        <main id="main" class="site-main">

            <div id="front-widgets">
					<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'front-1' ) ) : ?>
					<?php endif; ?>

					<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'front-2' ) ) : ?>
					<?php endif; ?>

					<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'front-3' ) ) : ?>
					<?php endif; ?>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();