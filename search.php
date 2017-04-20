<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package _tk
 */

get_header(); ?>
    <?php if ( have_posts() ) : ?>
        <header>
            <h2 class="page-title"><?php printf( __( 'Search Results for: %s', '_tk' ), '<span>' . get_search_query() . '</span>' ); ?></h2> </header>
        <form class="form-inline" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="form-group">
                <input type="search" name="s" class="form-control" id="search" value="<?php get_search_query(); ?>"> </div>
            <button type="submit" class="btn btn-default">Search</button>
        </form>
        <!-- .page-header -->
        <?php // start the loop. ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'search' ); ?>
                    <?php endwhile; ?>
                        <?php _tk_pagination(); ?>
                            <?php else : ?>
                                <?php get_template_part( 'no-results', 'search' ); ?>
                                    <?php endif; // end of loop. ?>
                                        <?php get_footer(); ?>