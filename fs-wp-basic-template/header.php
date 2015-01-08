<?php
/**
 * The template for displaying the header
 *
 * @package fs-wp-basic-template
 * @copyright FlickShine
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> dir="ltr" itemscope itemtype="http://schema.org/WebPage" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/components/normalize.css/normalize.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/components/ig-css-addons/ig-css-addons.min.css">

    <!-- for mobile:
    <meta name="viewport" content="width=device-width">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">-->

    <!-- google fonts, Noto Sans, new Google font, whats is accept any language and well styled like Helvetica Neue -->
    <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic"> -->

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.min.css">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- Generate all icons by: http://iconifier.net , http://realfavicongenerator.net -->

    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/favicon.ico" type="image/x-icon">
    <meta http-equiv="imagetoolbar" content="no">
    <![endif]-->
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">
    <!--[if lt IE 9]>
    <script src="//cdn.jsdelivr.net/g/html5shiv,css3-mediaqueries"></script><![endif]-->

    <!-- To automatize this tags, pls use Yoast WordPress SEO plugin - https://yoast.com/wordpress/plugins/seo/
    <link rel="canonical" href="<?php bloginfo('url'); ?>">

    Facebook (and some others) use the Open Graph protocol: see http://ogp.me/ for details

    <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="<?php bloginfo('language'); ?>">
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:url" content="<?php bloginfo('url'); ?>">

    Twitter: see https://dev.twitter.com/docs/cards/types/summary-card for details

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@yoursite">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:url" content="">
    <meta name="twitter:creator" content="@FlickShine">

    Other meta tags what not supported by Yoast WordPress SEO plugin -->

    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/logo.png">
    <meta property="og:keywords" content="key,words">
    <meta property="fb:app_id" content="appid from http://findmyfacebookid.com/">
    <meta name="dc.title" content="<?php wp_title('|', true, 'right'); ?>">
    <meta name="dc.language" content="<?php bloginfo('language'); ?>">
    <meta name="dcterms.subject" content="<?php bloginfo('description'); ?>">
    <meta name="dc.description" content="<?php bloginfo('description'); ?>">
    <meta name="dc.creator" content="FlickShine">

    <meta name="author" content="FlickShine">

    <!-- Who owns the content of this site? -->
    <meta name="copyright" content="">

    <?php wp_head(); ?>
</head>

<!-- Add to body tag a webpage type from schema.org like itemscope itemtype="http://schema.org/HairSalon" or Organization -->
<body itemscope itemtype="http://schema.org/HairSalon">
<!--[if lt IE 7]><p class="browsehappy">You are using an <strong>outdated</strong> browser. Please
    <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
<header class="cf" data-role="header" itemscope itemtype="http://schema.org/WPHeader">
    <div class="logo">
        <a href="<?php bloginfo('url'); ?>">
            <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="<?php $blog_title = get_bloginfo('name'); ?>"/>
        </a>
    </div>
    <nav data-role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
        <?php wp_nav_menu($args); ?>
    </nav>
</header>
