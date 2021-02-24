<?php $lang = get_language_attributes($doctype = 'html'); ?>
<!DOCTYPE html>
<html <?php echo $lang; ?> >
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VTZCVGJ8XQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-VTZCVGJ8XQ');
    </script>
    <meta name="google-site-verification" content="wu9QuhgLdpf8f3-MgcmgysQxmd0GpjrOFmbQ6rR2wXU" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 2 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('name'); ?></title>
<!--    <link rel="stylesheet" href="--><?php //bloginfo('template_url'); ?><!--/dist/css/all.min.css"/>-->
    <?php wp_head(); ?>
    <!-- Add stylesheets -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen"/>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,300;0,600;0,700;0,900;1,100&display=swap" rel="stylesheet">
    <!-- http://realfavicongenerator.net -->
    <link rel="apple-touch-icon" sizes="180x180"
    href="<?php bloginfo('template_url'); ?>/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
    href="<?php bloginfo('template_url'); ?>/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
    href="<?php bloginfo('template_url'); ?>/favicons/favicon-16x16.png">
    <link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <link rel="apple-touch-icon" sizes="180x180"
    href="<?php bloginfo('template_url'); ?>/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
    href="<?php bloginfo('template_url'); ?>/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
    href="<?php bloginfo('template_url'); ?>/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url'); ?>/favicons/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/favicons/safari-pinned-tab.svg" color="#f50000">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/codehex/slick/slick.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/codehex/slick/slick-theme.css"/>
    <!-- HTML5 sh   im and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_url'); ?>/dist/js/html5shiv.min.js" defer></script>
    <script src="<?php bloginfo('template_url'); ?>/dist/js/respond.min.js" defer></script>
    <script src="<?php bloginfo('template_url'); ?>/dist/js/selectivizr.js" defer></script>


<![endif]-->

</head>

<body <?php echo body_class(); ?>>
    <div>
        <header class="header wow fadeInDown">
            <div class="container-fluid menuNavPadding bgcolorBlack ">
                <div class="row d-flex d-lg-none pt-3">
                    <div class="col-8">
                        <a class="logo logoDesktop" href="<?php bloginfo('url'); ?>">
                            <img src="<?php bloginfo('template_url') ?>/dist/img/logo.png" alt="<?php bloginfo('name'); ?>"
                                 class="img-fluid"/>
                        </a>
                    </div>
                    <div class="col-4 align-self-center">
                        <a href="#mmenu-menu" class="mmenu-link d-block d-xl-none"><span class="fa fa-bars"></span><span
                                class="sr-only">MENU</span></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!--Menu  -->
                <div class="row align-items-center d-none d-lg-flex">
                    <div class="col-sm-3 col-sm-3 col-lg-2 logoDesktop">
                        <a class="logo" href="<?php bloginfo('url'); ?>">
                            <img src="<?php bloginfo('template_url') ?>/dist/img/logo.png" alt="<?php bloginfo('name'); ?>"
                                 class="" width="200px"/>
                        </a>
                    </div>
                    <div id="mmenu-menu" class="d-xl-none">
                        <ul>
                            <?php wp_nav_menu(array('theme_location' => 'top-menu', 'container' => 'false', 'items_wrap' => '%3$s')); ?>
                        </ul>
                    </div>
                    <div class="col-sm-9 col-md-9 col-lg-10 d-sm-none d-md-none d-lg-flex">
                        <nav class="site-menu d-none d-lg-block js-menu-desktop ml-auto">
                            <ul>
                                <?php wp_nav_menu(array('theme_location' => 'top-menu', 'container' => 'false', 'items_wrap' => '%3$s')); ?>
                            </ul>
                        </nav>
                    </div>
                </div>
         </div>
            <div class="progress-container">
                <div class="progress-bar" id="myBar"></div>
            </div>
            <a id="button"></a>
     </header>