<div class="author-box"
<h4 class="about-the-author">
	<?php echo __( "About the author", 'izzy' ) ?>
</h4>

<div class="postauthor-wrap">
 <span itemscope itemprop="image"
       alt="<?php echo esc_attr( sprintf( __( 'Photo of %s' ), get_the_author_meta( 'display_name' ) ) ); ?>">
 <?php if ( function_exists( 'get_avatar' ) ) {
	 echo get_avatar( get_the_author_meta( 'email' ), '100' );
 } ?>
 </span>

    <h5 class="vcard author" itemprop="url" rel="author">
        <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="fn"
           itemprop="name">
 <span itemprop="author" itemscope itemtype="https://schema.org/Person">
 <?php esc_attr_e( get_the_author_meta( 'display_name' ), 'izzy' ); ?>
 </span>
        </a>
    </h5>

	<?php the_author_meta( 'description' ) ?>
    <span class="post-author-links">
 <?php if ( '' !== get_the_author_meta( 'facebook' ) ): ?>
     <a class="author-link f" title="<?php echo esc_attr( sprintf( __( 'Follow on %s' ), 'Facebook' ) ) ?>"
        href="<?php echo esc_url( get_the_author_meta( 'facebook' ) ); ?>" target="_blank">
 <i class="fa fa-facebook">
 </i>
 </a>
 <?php endif; ?>
		<?php if ( '' !== get_the_author_meta( 'twitter' ) ): __() ?>
            <a class="author-link t" title="<?php echo esc_attr( sprintf( __( 'Follow on %s' ), 'Twitter' ) ) ?>"
               href="<?php esc_url( 'https://twitter.com/' . get_the_author_meta( 'twitter' ) ) ?>" target="_blank">
 <i class="fa fa-twitter">
 </i>
 </a>
		<?php endif; ?>
		<?php if ( '' !== get_the_author_meta( 'googleplus' ) ): ?>
            <a class="author-link g" title="<?php echo esc_attr( sprintf( __( 'Follow on %s' ), 'Google+' ) ) ?>"
               href="<?php echo esc_url( get_the_author_meta( 'googleplus' ) ); ?>" target="_blank">
 <i class="fa fa-google-plus">
 </i>
 </a>
		<?php endif; ?>
 </span>
</div>
</div>