<?php
$main_nav_options = array(
  'theme_location'    => 'main_menu',
  'depth'             => 2,
  'container'         => '',
  'container_class'   => '',
  'menu_class'        => 'nav navbar-nav navbar-right top-menu-nav',
  'fallback_cb'       => 'bootstrap_four_wp_navwalker::fallback',
  'walker'            => new bootstrap_four_wp_navwalker()
);
?>

<?php if ( has_nav_menu( 'main_menu' ) ) : ?>
  <nav class="navbar navbar-default" styl="margin-bottom:0;">
    <div class="container">
        <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
echo '<img alt="Brand" src="'.$image[0].'"/>'; ?>
        </a>
    </div>
      
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <?php wp_nav_menu( $main_nav_options ); ?>
    </div><!-- /.navbar-collapse -->
    </div><!-- .container -->
  </nav>
<?php endif; ?>
