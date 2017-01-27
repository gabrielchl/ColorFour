<div class="row" style="margin-bottom:35px;">
    <div class="container">
        <div class="row">
            <?php
            $query = siteorigin_widget_post_selector_process_query( $instance['posts'] );
$posts = new WP_Query($query);
while($posts->have_posts()) : $posts->the_post(); ?>
                <div class="col-md-4 col-sm-6 newholder">
                    <div onclick="location.href='<?php the_permalink(); ?>';" class="newsimg" style="width:100%; height: 200px; background-image:url('<?php if ( has_post_thumbnail() ) {
    the_post_thumbnail_url(); } else { $custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
echo $image[0]; }?>'); background-position:center; background-size:contain; background-color:#bbb; background-repeat:no-repeat; cursor:pointer;"></div>
                    <h5 class="newstitle" style="font-weight:600; font-size:17px;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <h6 class="newsdate" style="margin-top:4px;"><?php echo get_the_date(); ?></h6> </div>
                <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
    <style>
        .newholder {
            margin-bottom: 20px;
        }
        
        .newstitle {
            margin-bottom: 4px;
            margin-top: 7px;
        }
    </style>
</div>