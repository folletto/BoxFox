<div class="component--branding">
  <h1 class="component--branding__title">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
  </h1>

  <?php
  $description = get_bloginfo( 'description', 'display' );
  if ( $description || is_customize_preview() ) { ?>
    <p class="component--branding__description"><?php echo $description; ?></p>
  <?php } ?>
</div>
