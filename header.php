<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            <?php wp_title( '|', true, 'right' ); ?>
        </title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
            <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
            <link href="<?php echo get_template_directory_uri(); ?>/includes/css/hover.css" rel="stylesheet"> </head>

    <body <?php body_class(); ?>>
        <?php do_action( 'before' ); ?>
            <?php /*
<header id="masthead" class="site-header" role="banner">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
                <div class="container">
                    <div class="row">
                        <div class="site-header-inner col-sm-12">
                            <?php $header_image = get_header_image();
				if ( ! empty( $header_image ) ) { ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
					</a>
                                <?php } // end if ( ! empty( $header_image ) ) ?>
                                    <div class="site-branding">
                                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                        <p class="site-description lead">
                                            <?php bloginfo( 'description' ); ?>
                                        </p>
                                    </div>
                        </div>
                    </div>
                </div>
                <!-- .container -->
                </header>
                <!-- #masthead -->*/ ?>
                <style>
                    #navigation-bar {
                        position: relative;
                        height: 60px;
                    }
                    
                    #search {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 60px;
                        height: 60px;
                    }
                    
                    #label {
                        width: 60px;
                        height: 60px;
                        position: relative;
                        z-index: 20;
                    }
                    
                    #label label {
                        display: block;
                        width: 60px;
                        height: 60px;
                        background: url("../img/search.png") 0 0;
                        font-size: 0;
                        color: rgba(0, 0, 0, 0);
                        text-indent: -9999px;
                        cursor: pointer;
                    }
                    
                    #label label:hover {
                        background: url("../img/search.png") -60px 0
                    }
                    
                    #label.active label {
                        background: url("../img/search.png") -60px 0
                    }
                    
                    #input {
                        position: absolute;
                        top: 0;
                        left: 60px;
                        width: 450px;
                        height: 60px;
                        z-index: 5;
                        overflow: hidden;
                    }
                    
                    #input input {
                        display: block;
                        position: absolute;
                        top: 0;
                        left: -450px;
                        width: 450px;
                        height: 100%;
                        margin: 0;
                        padding: 0 10px;
                        border: none;
                        background-color: #23688b;
                        color: #fff;
                        font-size: 18px;
                        backface-visibility: none;
                        border-radius: 0;
                        transition: left 0;
                    }
                    
                    #input input:focus {
                        outline: none
                    }
                    
                    #input.focus {
                        z-index: 20
                    }
                    
                    #input.focus input {
                        left: 0;
                        transition: left 0.3s;
                    }
                    
                    nav {
                        padding-left: 70px;
                        position: relative;
                        z-index: 10;
                    }
                    
                    nav ul {
                        list-style-type: none;
                        margin: 0;
                        padding: 0;
                    }
                    
                    nav li {
                        display: inline-block;
                        height: 60px;
                        line-height: 60px;
                        font-size: 24px;
                        font-family: "Oswald", sans-serif;
                        font-weight: 300;
                        text-transform: uppercase;
                    }
                    
                    nav a {
                        display: block;
                        padding: 0 15px;
                        color: #c8c8c8;
                    }
                    
                    nav a:hover {
                        color: #3296c8
                    }
                </style>
                <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
                <div class="container" style="padding-bottom: 0;/* border-bottom: 1px solid #ccc; */">
                    <script>
                        (function (window) {
                            // get vars
                            var searchEl = document.querySelector("#input");
                            var labelEl = document.querySelector("#label");
                            // register clicks and toggle classes
                            labelEl.addEventListener("click", function () {
                                if (classie.has(searchEl, "focus")) {
                                    classie.remove(searchEl, "focus");
                                    classie.remove(labelEl, "active");
                                }
                                else {
                                    classie.add(searchEl, "focus");
                                    classie.add(labelEl, "active");
                                }
                            });
                            // register clicks outisde search box, and toggle correct classes
                            document.addEventListener("click", function (e) {
                                var clickedID = e.target.id;
                                if (clickedID != "search-terms" && clickedID != "search-label") {
                                    if (classie.has(searchEl, "focus")) {
                                        classie.remove(searchEl, "focus");
                                        classie.remove(labelEl, "active");
                                    }
                                }
                            });
                        }(window));
                    </script>
                    <div class="pull-right clearfix" id="navigation-bar">
                        <form id="search" action="#" method="post">
                            <div id="label">
                                <label for="search-terms" id="search-label">search</label>
                            </div>
                            <div id="input">
                                <input type="text" name="search-terms" id="search-terms" placeholder="Enter search terms...">
                            </div>
                        </form> <a href="http://gabrielcoderity.esy.es/awana/wp-admin" style="
    font-weight: bold;
    color: #000;
    /* background-color: #FE8453; */
    padding: 9px 20px;
    /* margin-top: 112px; */
    display: inline-block;
">登入</a><a href="http://gabrielcoderity.esy.es/awana/zh/%E8%B3%87%E6%BA%90/" style="
    font-weight: bold;
    color: #000;
    /* background-color: #FE8453; */
    padding: 9px 20px;
    /* margin-top: 112px; */
    display: inline-block;
">資源</a><a href="http://gabrielcoderity.esy.es/awana/zh/%E5%A5%89%E7%8D%BB/" style="
    color: #fff;
    background-color: #FE8453;
    padding: 9px 20px;
    /* margin-top: 112px; */
    display: inline-block;
    font-weight: bold;
">奉獻</a> </div>
                </div>
                <nav class="site-navigation" style="border-top: 1px solid #ccc;">
                    <?php // substitute the class "container-fluid" below if you want a wider content area ?>
                        <div class="container" style="padding-bottom:0;">
                            <div class="row">
                                <div class="site-navigation-inner col-sm-12">
                                    <div class="navbar navbar-default" style="background-color:#fff; border:none; margin-bottom:0;">
                                        <div class="navbar-header">
                                            <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse"> <span class="sr-only"><?php _e('Toggle navigation','_tk') ?> </span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                            <!-- Your site title as branding in the menu --><a class="navbar-brand" href="<?php echo get_home_url(); ?>">
        <img alt="Brand" src="<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
echo $image[0]; ?>">
      </a> </div>
                                        <!-- The WordPress Menu goes here -->
                                        <?php wp_nav_menu(
						array(
							'theme_location' 	=> 'primary',
							'depth'             => 2,
							'container'         => 'nav',
							'container_id'      => 'navbar-collapse',
							'container_class'   => 'collapse navbar-collapse',
							'menu_class' 		=> 'nav navbar-nav navbar-right navbar-special',
							'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
							'menu_id'			=> 'main-menu',
							'walker' 			=> new wp_bootstrap_navwalker()
						)
					); ?>
                                    </div>
                                    <!-- .navbar -->
                                </div>
                            </div>
                        </div>
                        <!-- .container -->
                </nav>
                <!-- .site-navigation -->
                <style>
                    .alert-wrap {
                        width: 100%;
                        text-align: center;
                        position: fixed;
                        bottom: 0;
                        z-index: 9999;
                    }
                    
                    .alert {
                        padding: 20px;
                        background-color: #f44336;
                        color: white;
                        opacity: 1;
                        transition: opacity 0.6s;
                        margin-bottom: 15px;
                        display: inline-block;
                    }
                    
                    .alert.warning {
                        background-color: #ff9800;
                    }
                    
                    .closebtn {
                        margin-left: 15px;
                        color: white;
                        font-weight: bold;
                        float: right;
                        font-size: 22px;
                        line-height: 20px;
                        cursor: pointer;
                        transition: 0.3s;
                    }
                    
                    .closebtn:hover {
                        color: black;
                    }
                </style>
                <div class="alert-wrap">
                    <div class="alert warning"> <span class="closebtn">×</span>新系統正在測試階段，如有任何疑問，請聯絡 systemdev@awana.hk。 </div>
                </div>
                <script>
                    var close = document.getElementsByClassName("closebtn");
                    var i;
                    for (i = 0; i < close.length; i++) {
                        close[i].onclick = function () {
                            var div = this.parentElement;
                            div.style.opacity = "0";
                            setTimeout(function () {
                                div.style.display = "none";
                            }, 600);
                        }
                    }
                </script>
                <div class="main-content real-main-content">
                    <?php // substitute the class "container-fluid" below if you want a wider content area ?>
                        <div class="container" style="padding-bottom:0;">
                            <div class="row">
                                <div id="content" class="main-content-inner col-sm-12" style="padding-bottom:0;">