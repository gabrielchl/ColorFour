<?php
/**
 * Template Name: Page - Awana Home Page
 * Description: Page without side bar for Awana
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

    <div class="container">
        <!--<div class="row">
            <div class="span12">
                <?php if (function_exists('bootstrapwp_breadcrumbs')) {
                bootstrapwp_breadcrumbs();
                } ?>
            </div>
        </div>-->

        <div class="row content">
            <?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>

        </div><!-- .row content -->
    </div><!--/.container -->

<?php get_footer(); ?>