<?php
/**
 * @package _tk
 */
?>
    <article style="margin-top:20px; margin-bottom:20px;background-color:#fff; border: 1px solid #ededed;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header style="border-bottom: 1px solid #ededed;">
            <div class="col-xs-2" style="border-right: 1px solid #ededed; height:60px; text-align:center;">
                <?php the_date('d', '', ''); ?>
                    <?php the_date('m-Y', '', ''); ?>
            </div>
            <div class="col-xs-10" style="height:60px;"> <span style="font-size:36px; text-align:center; margin-top:10px;"><?php the_title(); ?></span> </div>
            <!--<h1 class="page-title" style="text-align:center; margin-top:10px;"><?php the_title(); ?></h1>-->
            <!-- .entry-meta -->
        </header>
        <!-- .entry-header -->
        <div class="entry-content">
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