<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php if (is_singular() && pings_open(get_queried_object())): ?>
    <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
    <?php endif; ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Youth Fencing Outreach and Mentoring. Giving back through fencing. Learn to fence." />
    <meta name="keywords"
        content="fencing, youth, chicago, USA Fencing, charity, non-profit, giving back, community, learn to fence, Tate Nguyen, Ella Nguyen" />
    <meta name="author" content="Nguyen Nguyen" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/YFC-thumb.png" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://youthfencingchicago.com" />
    <meta property="og:title" content="Youth Fencing Chicago" />
    <meta property="og:site_name" content="Youth Fencing Chicago" />
    <meta property="og:description"
        content="Youth Fencing Outreach and Mentoring in Chicago. Giving back through fencing. Learn to fence." />

    <!--favicon-->
    <!--<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/yfc.ico" type="image/x-icon"/>-->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>
	/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>
	/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>
	/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>
	/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>
	/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>
	/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>
	/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>
	/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>
	/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>
	/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>
	/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>
	/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>
	/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>
	/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--<link rel="shortcut icon" href="yfc.ico" type="image/x-icon" />-->
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/safari-pinned-tab.svg"
        color="#000000">
    <!--Stylesheet-->
    <?php wp_head(); ?>
</head>

<body>
    <button type="button" class="btn btn-danger btn-lg" id="btn-top">
        <i class="bi bi-arrow-up"></i>
    </button>
    <section id="hero" class="your-hero">
        <div class="your-herodd"></div>
        <header>
            <!------------ BEGIN MENU ---------------->
            <div class="dropdown">
                <button type="button" class="btn btn-primary nav-toggle" data-bs-toggle="dropdown" id="menu-drop">
                    Menu<span></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="menu-drop">
                    <li><a class="dropdown-item" href="#about">About</a></li>
                    <li><a class="dropdown-item" href="#gallery">Gallery</a></li>
                    <li><a class="dropdown-item" href="#featured">What</a></li>
                    <li><a class="dropdown-item" href="#team">Who</a></li>
                    <li><a class="dropdown-item" href="#contact">Contact</a></li>
                </ul>
            </div>
            <!------------ END MENU ---------------->
        </header>
        <div class="wrapper">
            <div class="welcome">
                <h1 class="co-title"><strong>Youth Fencing</strong> Chicago</h1>
                <h4 class="splash">Giving back through fencing</h4>
                <p class="title-splash">Fencing is more than just a sport, it's a developmental tool that carries great
                    benefits for the growth of young children.</p>
            </div>
            <div class="photographer"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero.png"
                    alt="fencing-mask"></div>
        </div>
    </section>