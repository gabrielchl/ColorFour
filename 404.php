<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package _tk
 */

get_header(); ?>
    <?php // add the class "panel" below here to wrap the content-padder in Bootstrap style ;) ?>
        <div class="row" style="margin-top: 100px; margin-bottom: 100px;">
            <div class="container">
                <div style="color: #555;">
                    <?php
                    $whattodispnum = rand(1,3);
                    switch ($whattodispnum) {
                        case 1:
                            $printfourofour = 'Nothing Here?!';
                            break;
                        case 2:
                            $printfourofour = 'It\'s BLANK!';
                            break;
                        case 3:
                            $printfourofour = 'Oh No!!!';
                            break;
                    }
                    ?>
                        <h1 style="font-weight: bold; font-size:70px;"><?php echo $printfourofour; ?></h1>
                        <p style="font-weight: 500;">The page you've been looking for has gone... :'(
                            <br>Maybe you would like to get back?</p>
                </div>
            </div>
            <!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
        </div>
        <?php get_sidebar(); ?>
            <?php get_footer(); ?>