<!doctype html>
<html lang="en">

<head>
    <meta charset=<?php bloginfo( 'charset');?>>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php wp_title( '&#124;', true, 'right' ); ?>
    </title>
    <link rel="icon" href="<?php bloginfo('template_url');?>/favicon.ico" type="image/x-icon">
    <!--[if IE]><link rel="shortcut icon" href="favicon.ico" type="image/x-icon"><![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/reset.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.min.css">
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
    <!--[if lt IE 9]><script src="http://cdn.jsdelivr.net/html5shiv/latest/html5shiv.min.js"></script><![endif]-->
    <?php wp_head(); ?>
</head>

<body>

    <header class="cf">
        <div class="logo">
            <a href="<?php bloginfo('url');?>">
                <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="<?php $blog_title = get_bloginfo('name');?>" />
            </a>
        </div>
        <nav>
            <?php wp_nav_menu( $args );?>
        </nav>
    </header>
