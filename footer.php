<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
    </div>
    <!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
    </div>
    <!-- close .row -->
    </div>
    <!-- close .container -->
    </div>
    <!-- close .main-content -->
    <footer id="colophon" class="site-footer main-content" role="contentinfo">
        <?php // substitute the class "container-fluid" below if you want a wider content area ?>
            <style>
                .footerfourbox {
                    padding-top: 20px;
                    padding-bottom: 25px;
                }
            </style>
            <div class="" style="background-color:#666;">
                <div class="container" id="getthisheiht">
                    <div class="row" style="color:#fff;">
                        <div class="col-md-3 footerfourbox" style="background-color: #FE8453; border-bottom: #ad5836 10px solid;"><img src="<?php bloginfo('stylesheet_directory');
                                ?>/awanalogowhite.png" style="padding-bottom: 15px; width: 100%; height: auto; max-width: 200px;" />
                            <br>
                            <?php dynamic_sidebar( 'widget_footer_one' ); ?>
                        </div>
                        <div class="col-md-3 footerfourbox" style="background-color: #80C3D3; border-bottom: #547f8a 10px solid;">
                            <?php dynamic_sidebar( 'widget_footer_two' ); ?>
                        </div>
                        <div class="col-md-3 footerfourbox" style="background-color: #88C87A; border-bottom: #5f8c56 10px solid;">
                            <?php dynamic_sidebar( 'widget_footer_three' ); ?>
                        </div>
                        <div class="col-md-3 footerfourbox" style="background-color: #F1CD3B; border-bottom: #b3982a 10px solid;">
                            <style>
                                .footerfourbox ul {
                                    list-style-type: none;
                                    padding-left: 0px;
                                }
                            </style>
                            <?php dynamic_sidebar( 'widget_footer_four' ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="" style="background-color:#444;">
                <div class="" id="getthisheiht" style="padding-bottom:0;">
                    <div class="container" style="padding-bottom:20px; padding-top:20px;"> <span style="color:#ccc;">2017 &copy; Awana Hong Kong LTD, Designed by Gabriel Lee</span> </div>
                </div>
            </div>
    </footer>
    <!-- close #colophon -->
    <?php wp_footer(); ?>
        </body>

        </html>