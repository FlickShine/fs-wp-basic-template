<!doctype html>
<html lang="<?php language_attributes();?>">

<head>
    <meta charset=<?php bloginfo('charset');?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php wp_title('&#124;',true,'right');?>
    </title>
    <link rel="canonical" href="<?php get_site_url();?>">
    <link rel="icon" href="<?php bloginfo('template_url');?>/favicon.ico" type="image/x-icon">
    <!--[if IE]><link rel="shortcut icon" href="favicon.ico" type="image/x-icon"><![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/reset.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.min.css">
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
    <!--[if lt IE 9]><script src="http://cdn.jsdelivr.net/g/html5shiv,css3-mediaqueries"></script><![endif]-->
    <meta property="og:site_name" content="<?php bloginfo('name');?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="<?php bloginfo('language');?>">
    <meta property="og:title" content="<?php wp_title('&#124;',true,'right');?>">
    <meta property="og:description" content="<?php bloginfo('description');?>">
    <meta property="og:url" content="<?php get_site_url();?>">
    <meta property="og:image" content="<?php bloginfo('template_url');?>/img/logo.png">
    <meta property="og:keywords" content="key,words">
    <meta property="fb:app_id" content="appid from http://findmyfacebookid.com/">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <?php wp_head(); ?>
</head>

<body itemscope="itemscope" itemtype="http://schema.org/WebPage">

    <header class="cf" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
        <div class="logo">
            <a href="<?php bloginfo('url');?>">
                <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="<?php $blog_title = get_bloginfo('name');?>" />
            </a>
        </div>
        <nav role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
            <?php wp_nav_menu( $args );?>
        </nav>
    </header>
