<?php
/**
 * Template Name: Home Page
 * Description: Page template only for home page.
 */

get_header(); ?>

<?php get_template_part( 'navigation', 'default' ); ?>

<div class="container main-container">
  <div class="row">
<?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      get_template_part( 'content', get_post_format() );
    endwhile;
      bootstrap_four_the_posts_pagination();
  else :
    ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'bootstrap-four' ); ?></p><?php
  endif;
?>
  </div><!-- .row -->
</div><!-- .container.main-container -->

<?php get_footer(); ?>