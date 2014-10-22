<!doctype html>
<html lang="en">

<head>
    <meta charset=<?php bloginfo( 'charset');?>>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php wp_title( '&#124;', true, 'right' ); ?>
    </title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <!--[if lt IE 9]><script src="http://cdn.jsdelivr.net/html5shiv/latest/html5shiv.min.js"></script><![endif]-->
    <link rel="stylesheet" href="reset.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ;?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>

<body>

    <header class="cf">
        <div class="logo">
            <a href="<?php bloginfo('url'); ?>">
                <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="<?php $blog_title = get_bloginfo('name'); ?>" />
            </a>
        </div>
        <nav>
            <?php wp_nav_menu( $args ); ?>
        </nav>
    </header>
