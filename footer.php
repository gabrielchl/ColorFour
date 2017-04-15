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
    <footer id="colophon" class="site-footer main-content" role="contentinfo" style="<?php if (is_front_page()) {echo '';} else {echo 'margin-top:30px'; } ?>">
        <?php // substitute the class "container-fluid" below if you want a wider content area ?>
            <style>
                .footerfourbox {
                    padding-top: 20px;
                    padding-bottom: 25px;
                }
                
                .footer-row h2 {
                    font-size: 25px;
                }
            </style>
            <div class="" style="background-color:#666;">
                <div class="container" id="getthisheiht">
                    <div class="row footer-row" style="color:#fff;">
                        <!--<div class="col-md-3 footerfourbox" style="background-color: #FE8453; border-bottom: #ad5836 10px solid;">
                            <div style="text-align:center;"> <img src="http://gabrielcoderity.esy.es/awana/wp-content/uploads/2017/04/awana-color.png" style="padding-bottom: 15px; width: 100%; height: auto; max-width: 150px;" /> </div>
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
                        </div>-->
                        <div class="col-sm-3 footer-row-box footer-row-box-one" style="">
                            <h2 style="padding-bottom:15px; margin-bottom:0;">Awana Hong Kong</h2>
                            <?php dynamic_sidebar( 'widget_footer_one' ); ?>
                        </div>
                        <div class="col-sm-3 footer-row-box footer-row-box-two" style="">
                            <?php dynamic_sidebar( 'widget_footer_two' ); ?>
                        </div>
                        <div class="col-sm-3 footer-row-box footer-row-box-three" style="">
                            <?php dynamic_sidebar( 'widget_footer_three' ); ?>
                        </div>
                        <div class="col-sm-3 footer-row-box footer-row-box-four" style="">
                            <?php dynamic_sidebar( 'widget_footer_four' ); ?>
                        </div>
                        <style>
                            @media (min-width: 535px) and (max-width:767px) {
                                .footer-row-box {
                                    width: 50%;
                                }
                            }
                            
                            .footer-row-box h2 {
                                font-weight: bold;
                            }
                            
                            .footer-row-box-one h2 {
                                color: #FE8453;
                            }
                            
                            .footer-row-box-two h2 {
                                color: #80C3D3;
                            }
                            
                            .footer-row-box-three h2 {
                                color: #88C87A;
                            }
                            
                            .footer-row-box-four h2 {
                                color: #F1CD3B;
                            }
                            
                            .footer-row-box ul {
                                padding-left: 0;
                            }
                            
                            .footer-row-box ul li {
                                list-style-type: none;
                            }
                            
                            .footer-row-box ul li a {
                                color: #eee;
                            }
                        </style>
                    </div>
                </div>
            </div>
            <div class="" style="background-color:#444;">
                <div class="" id="getthisheiht" style="padding-bottom:0;">
                    <div class="container" style="padding-bottom:20px; padding-top:20px;"> <span style="color:#ccc;">2017 &copy; Awana Hong Kong Limited, Designed by Gabriel Lee</span> </div>
                </div>
            </div> <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
            <style>
                #return-to-top {
                    z-index: 99999;
                    position: fixed;
                    bottom: 20px;
                    right: 20px;
                    background: rgb(83, 121, 208);
                    background: rgba(83, 121, 208, 0.7);
                    width: 50px;
                    height: 50px;
                    display: block;
                    text-decoration: none;
                    -webkit-border-radius: 35px;
                    -moz-border-radius: 35px;
                    border-radius: 4px;
                    display: none;
                    -webkit-transition: all 0.3s linear;
                    -moz-transition: all 0.3s ease;
                    -ms-transition: all 0.3s ease;
                    -o-transition: all 0.3s ease;
                    transition: all 0.3s ease;
                }
                
                #return-to-top i {
                    color: #fff;
                    margin: 0;
                    position: relative;
                    left: 16px;
                    top: 13px;
                    font-size: 19px;
                    -webkit-transition: all 0.3s ease;
                    -moz-transition: all 0.3s ease;
                    -ms-transition: all 0.3s ease;
                    -o-transition: all 0.3s ease;
                    transition: all 0.3s ease;
                }
                
                #return-to-top:hover {
                    background: rgba(83, 121, 208, 0.9);
                }
                
                #return-to-top:hover i {
                    color: #fff;
                    top: 10px;
                }
            </style>
            <script>
                $(window).scroll(function () {
                    if ($(this).scrollTop() >= 400) { // If page is scrolled more than 50px
                        $('#return-to-top').fadeIn(300); // Fade in the arrow
                    }
                    else {
                        $('#return-to-top').fadeOut(300); // Else fade out the arrow
                    }
                });
                $('#return-to-top').click(function () { // When arrow is clicked
                    $('body,html').animate({
                        scrollTop: 0 // Scroll to top of body
                    }, 500);
                });
            </script>
            <script>
                var maxHeight = Math.max.apply(null, $("div.sameHeight").map(function () {
                    return $(this).height();
                }).get());
            </script>
    </footer>
    <!-- close #colophon -->
    <?php wp_footer(); ?>
        </body>

        </html>