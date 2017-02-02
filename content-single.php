<?php
/**
 * @package _tk
 */
?>
    <article style="margin-top:20px; margin-bottom:20px;background-color:#fff; border: 1px solid #ededed;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header style="border-bottom: 1px solid #ededed;">
            <div class="col-sm-2" style="border-right: 1px solid #ededed; height:100px; text-align:center;">
                <div> <span class="post-date" style="clear: both; color: #000; display: block; font-size: 36px; margin: 0 0 10px;"><?php the_date('d', '', ''); ?></span> <span class="post-month uppercase" style="margin: 0; padding: 0; border: 0; outline: 0; font-size: inherit; vertical-align: baseline; text-transform: uppercase;"><?php the_date('m', '', ''); ?></span> <span class="post-year uppercase" style="margin: 0; padding: 0; border: 0; outline: 0; font-size: inherit; vertical-align: baseline;"><?php the_date('Y', '', ''); ?></span> </div>
            </div>
            <div class="col-sm-10" style="height:100px; padding:20px;"> <span style="font-size:28px; text-align:center; margin-top:10px;"><?php the_title(); ?></span> </div>
            <!--<h1 class="page-title" style="text-align:center; margin-top:10px;"><?php the_title(); ?></h1>-->
            <!-- .entry-meta -->
        </header>
        <!-- .entry-header -->
        <div class="entry-content" style="padding:20px;">
            <div class="entry-content-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
            <?php the_content(); ?>
                <?php _tk_link_pages(); ?>
        </div>
        <!-- .entry-content -->
        <footer class="entry-meta">
            <div class="entry-meta">
                <?php _tk_posted_on(); ?>
            </div>
            <?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', '_tk' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', '_tk' ) );

			if ( ! _tk_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_tk' );
				} else {
					$meta_text = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_tk' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_tk' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_tk' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(),
				the_title_attribute( 'echo=0' )
			);
		?>
                <?php edit_post_link( __( 'Edit', '_tk' ), '<span class="edit-link">', '</span>' ); ?> </footer>
        <!-- .entry-meta -->
    </article>
    <!-- #post-## -->
    <style>
        .main-content {
            background-color: #ededed;
        }
        
        .site-footer {
            margin-top: 0 !important;
        }
    </style>