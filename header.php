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
                <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                <div class="container topmostbar" style="padding-bottom: 0;/* border-bottom: 1px solid #ccc; */">
                    <style>
                        .header-search-form .header-form-group {
                            float: right !important;
                            transition: all 0.35s, border-radius 0s;
                            width: 32px;
                            height: 32px;
                            background-color: #fff;
                            margin-bottom: 0;
                        }
                        
                        .header-earch-form .header-form-group input.header-form-control {
                            padding-right: 20px;
                            border: 0 none;
                            background: transparent;
                            box-shadow: none;
                            display: block;
                        }
                        
                        .header-search-form .header-form-group input.header-form-control::-webkit-input-placeholder {
                            display: none;
                        }
                        
                        .header-search-form .header-form-group input.header-form-control:-moz-placeholder {
                            /* Firefox 18- */
                            display: none;
                        }
                        
                        .header-search-form .header-form-group input.header-form-control::-moz-placeholder {
                            /* Firefox 19+ */
                            display: none;
                        }
                        
                        .header-search-form .header-form-group input.header-form-control:-ms-input-placeholder {
                            display: none;
                        }
                        
                        .header-search-form .header-form-group:hover,
                        .header-search-form .header-form-group.hover {
                            width: 240px;
                        }
                        
                        @media (max-width: 550px) {
                            .header-search-form .header-form-group:hover,
                            .header-search-form .header-form-group.hover {
                                width: 80%;
                                width: calc(100% - 210px);
                            }
                        }
                        
                        .header-search-form .header-form-group span.header-form-control-feedback {
                            position: absolute;
                            top: -1px;
                            right: -2px;
                            z-index: 2;
                            display: block;
                            width: 34px;
                            height: 34px;
                            line-height: 34px;
                            text-align: center;
                            color: #3596e0;
                            left: initial;
                            font-size: 14px;
                        }
                    </style>
                    <div>
                        <form action="" class="search-form header-search-form">
                            <div class="form-group has-feedback header-form-group header-has-feedback" style="
    margin-top: 3px;
">
                                <label for="search" class="sr-only">Search</label>
                                <input type="text" class="form-control header-form-control" name="search" id="search" placeholder="search" autocomplete="off"> <span class="glyphicon glyphicon-search form-control-feedback"></span> </div>
                        </form>
                    </div>
                    <div class="pull-right"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Coming soon!">繁 / Eng</a><a href="http://gabrielcoderity.esy.es/awana/wp-admin">登入</a><a href="http://gabrielcoderity.esy.es/awana/zh/%E8%B3%87%E6%BA%90/">資源</a><a href="http://gabrielcoderity.esy.es/awana/zh/%E5%A5%89%E7%8D%BB/" style="background-color: #FE8453; color:#fff; margin-left:12px; margin-right: 5px; padding: 9px 20px;">奉獻</a> </div>
                </div>
                <style>
                    .topmostbar a {
                        color: #333;
                        padding: 9px 12px;
                        display: inline-block;
                        text-decoration: none;
                    }
                </style>
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
                        background-color: #FE8453;
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
                <!--<div class="alert-wrap">
                    <div class="alert warning"> <span class="closebtn">×</span>新系統正在測試階段，如有任何疑問，請聯絡 systemdev@awana.hk。 </div>
                </div>-->
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