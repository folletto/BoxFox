<article id="post-<?php the_ID(); ?>" <?php post_class('component--post'); ?>>
	<?php if ( get_the_post_thumbnail() != '' ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'boxfox-featured-image' ); ?>
			</a>
		</div>
	<?php endif; ?>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* %s: Name of current post. */
				wp_kses(
          __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'boxfox' ), array( 'span' => array( 'class' => array() ) ) ),
				  the_title( '<span class="screen-reader-text">"', '"</span>', false )
			  )
      );
		?>
	</div>
</article>
