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
                <div class="upon-nav"></div>
                <nav class="site-navigation">
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
                        width: 80%;
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