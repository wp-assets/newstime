<?php
/**
** Theme Header Template here.
**
**@package newstime
**
*/
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js" lang="en">
<head>
<meta charset="<?php bloginfo("charset"); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" <?php bloginfo("pingback_url");?> >
<meta http-eduiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content=""/>
<!-- StyleSheet -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">


<!-- FontsOnline -->
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,300italic,300,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

<!-- JavaScripts -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Wrapper -->
<div class="wrap push">

    <!-- Header -->
    <div class="header-wrap">

        <!-- Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row">

                    <!-- Top Left Nav -->
                    <div class="col-sm-6 col-xs-6">
                        <ul class="top-left">
                            <li><i class="fa fa-phone"></i>+84 868.8568</li>     
                            <li><i class="fa fa-envelope-o"></i>support@example.com</li>
                        </ul>
                    </div>
                    <!-- Top Left Nav -->

                    <!-- Top Right Nav -->
                    <div class="col-sm-6 col-xs-6 r-full-width">
                        <ul class="top-right text-right">
                            <li class="md-trigger" data-modal="login-popup"><a href="#"><i class="fa fa-key">
                            </i>login</a></li>
                            <li class="md-trigger" data-modal="register-popup"><a href="#"><i class="icon-user"></i>register</a></li>

                        </ul>
                    </div>
                    <!-- Top Right Nav -->

                </div>
            </div>
        </div>
        <!-- Top Bar -->

        <!-- Navigation Holder -->
        <header class="header">
            <div class="container">
                <div class="nav-holder">

                    <!-- Logo Holder -->
                    <div class="logo-holder">
                    <!-- Home Linking -->
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inner-logo"></a>
                    </div>
                    <!-- Logo Holder -->

                    <!-- Navigation -->
                    <div class="cr-navigation">

						<!-- Navbar -->
                         <nav class="cr-nav">
<!--                             <ul>
                                <li><a href="index.html">home</a>
                                    <ul>
                                       <li><a href="index-2.html">Home 2</a></li> 
                                       <li><a href="index-3.html">Home 3</a></li> 
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">categories</a>
                                    <ul>
                                       <li><a href="listing-page-1.html">fashion</a></li> 
                                       <li><a href="listing-page-2.html">sports</a></li> 
                                       <li><a href="listing-page-3.html">world</a></li> 
                                       <li><a href="listing-page-4.html">lifestyle</a></li> 
                                       <li><a href="listing-page-5.html">technology</a></li> 
                                       <li><a href="listing-page-6.html">health</a></li> 
                                       <li><a href="listing-page-7.html">MISC</a></li> 
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">post</a>
                                    <ul>
                                       <li><a href="video-post.html">video post</a></li> 
                                       <li><a href="slider-post.html">slider post</a></li> 
                                       <li><a href="post-detail.html">post detail</a></li> 
                                       <li><a href="post-detail-full-width.html">post detail full width</a></li> 
                                    </ul>
                                </li>
                                <li><a href="contact.html">contact </a></li> 
                                <li><a href="404.html">404</a></li> 
                                <li><a href="faq.html">faq</a></li> 
                                <li><a href="comming-soon.html">comming soon</a></li> 
                            </ul> -->

                        <?php  wp_nav_menu(
                            array(
                                'theme_location'=>'header_menu',
                                'container_class'=>'cr-nav',
                                'items_wrap'=>'<ul class="">%3$s</ul>',
                            )
                        );?>


                        </nav>
						<!-- Navbar -->

                        <ul class="cr-add-nav">
                            <li><a href="#" class="icon-search md-trigger" data-modal="search-popup"></a></li>
                            <li><a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a></li>
                        </ul>

                    </div>
                    <!-- Navigation -->

                </div>
            </div>
        </header>
        <!-- Navigation Holder -->

    </div>
    <!-- Header -->
