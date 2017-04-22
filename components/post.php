<article id="post-<?php the_ID(); ?>" <?php post_class('component--post'); ?>>
	<?php if ( get_the_post_thumbnail() != '' ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'boxfox-featured-image' ); ?>
			</a>
		</div>
	<?php endif; ?>

	<header class="entry-header">
    <?php if ( get_post_type() == 'post' ) {
		  get_template_part( 'components/meta' );
    } ?>
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			}
    ?>
	</header>

  <div class="entry-content">
		<?php
			the_content( sprintf(
				/* %s: Name of current post. */
				wp_kses(
          __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'boxfox' ), array( 'span' => array( 'class' => array() ) ) ),
				  the_title( '<span class="screen-reader-text">"', '"</span>', false )
			  )
      );

      wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'boxfox' ),
				'after'  => '</div>',
			) );
		?>
	</div>

  <footer class="entry-footer">
		<?php boxfox_entry_footer(); ?>

    <?php get_template_part( 'components/edit-link' ); ?>
	</footer>
</article>
