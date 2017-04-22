<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'components/post-front-page' );

			endwhile;
			?>

		</main>
	</div>
<?php

if ( is_front_page() ) {
  if ( is_active_sidebar( 'home-main-widgets' ) ) {
  	dynamic_sidebar( 'home-main-widgets' );
  }
}

get_footer();
