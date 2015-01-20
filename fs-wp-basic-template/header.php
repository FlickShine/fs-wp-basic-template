<?php
/**
 * The template for displaying the header
 *
 * @package fs-wp-basic-template
 * @copyright FlickShine
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> dir="ltr" itemscope itemtype="http://schema.org/WebPage">
<!--prefix="og: http://ogp.me/ns#" adding in yoast-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>">
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
    <!--[if IEMobile]><meta http-equiv="cleartype" content="on"><![endif]-->
    <!--[if lt IE 9]><script src="//cdn.jsdelivr.net/g/html5shiv,css3-mediaqueries"></script><![endif]-->

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

    <!-- Who owns the content of this site? 
    <meta name="copyright" content=""> - not valid
    http://dev.w3.org/html5/spec/text-level-semantics.html#the-small-element
    So, fill copyright and etc in <small> element in footer
    -->

    <?php wp_head(); ?>
</head>

<!-- Add to body tag a webpage type from schema.org like itemscope itemtype="http://schema.org/HairSalon" or Organization -->
<body itemscope itemtype="http://schema.org/HairSalon">
<!--[if lt IE 7]><p class="browsehappy">You are using an <strong>outdated</strong> browser. Please
    <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->

<!-- example of schema.org for HairSalon -->
<div class="seomarkup">
    <span itemprop="name" class="fn">SohoNYCbarbers</span>

    <a itemprop="url" href="http://sohonycbarbers.com">sohonycbarbers.com</a>

    <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="logo"/>

    <div itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates">
        <meta itemprop="latitude" content="40.720896"/>
        <meta itemprop="longitude" content="73.997118"/>
    </div>

    <span itemprop="telephone">(212)966-6069</span>

    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
        <span itemprop="streetAddress">396 Broome St</span> <span itemprop="addressLocality">New York</span>,
        <span itemprop="addressRegion">NY</span> <span itemprop="postalCode">10013</span>
    </div>

    <span itemprop="email"><a href="mailto:sohonycbarbers@gmail.com"><em>sohonycbarbers@gmail.com</em></a></span>

    <span itemprop="priceRange">$$</span>

    <span itemprop="description">All Men’s Haircut, Grooming, Shave. We will go all out to make You look and feel fabulous.</span>

    <div itemprop="review" itemscope itemtype="http://schema.org/Review">
        <span itemprop="author">Mark Bearak</span> <span itemprop="itemReviewed">SohoNYCbarbers</span>
        <meta itemprop="datePublished" content="2014-09-14">
        September 14, 2014
        <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
            <span itemprop="ratingValue">5</span>/ <span itemprop="bestRating">5</span>stars
        </div>
        <span itemprop="description">Great location, chill environment and clean quick haircut.</span>
    </div>
    <div itemprop="review" itemscope itemtype="http://schema.org/Review">
        <span itemprop="author">Joseph Ibragimov</span> <span itemprop="itemReviewed">SohoNYCbarbers</span>
        <meta itemprop="datePublished" content="2013-11-28">
        November 28, 2013
        <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
            <span itemprop="ratingValue">5</span>/ <span itemprop="bestRating">5</span>stars
        </div>
        <span itemprop="description">Nice barber shop, affordable prices, they take there time. Tv's on each station watching nice entertainment.</span>
    </div>

    <div itemscope itemtype="http://data-vocabulary.org/Review-aggregate">
        <span itemprop="itemreviewed">SohoNYCbarbers</span>
        <img itemprop="photo" src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="sohonycbarbers"/>
            <span itemprop="rating" itemscope itemtype="http://data-vocabulary.org/Rating">
                <span itemprop="average">5</span>
            <span itemprop="best">5</span>
            </span>
        <span itemprop="votes">2</span>
    </div>

    <span itemprop="currenciesAccepted">USD</span>
    <span itemprop="paymentAccepted">Cash, credit card, Visa, MasterCard</span>

    <meta itemprop="openingHours" content="Mo-Th 10:00-19:00">
    <meta itemprop="openingHours" content="Fr 10:00-15:30">
    <meta itemprop="openingHours" content="Su 10:30-18:00">

    <a itemprop="maps" href="http://maps.google.com/maps?ll=40.720896,-73.997118&amp;z=15&amp;t=m&amp;hl=ru-RU&amp;gl=UA&amp;mapclient=embed&amp;q=396%20Broome%20St%20New%20York%2C%20NY%2010013%20%D0%A1%D0%A8%D0%90">URL of Map</a>

    <div itemscope itemtype="http://schema.org/photos">
        <div itemscope itemtype="http://schema.org/ImageObject">
            <h2 itemprop="name">MEN`S HAIRCUT in sohonycbarbers</h2>
            <img src="http://sohonycbarbers.com/wp-content/themes/nextlevel/img/haircut_A.jpg" alt="MEN`S HAIRCUT" itemprop="contentUrl"/>
            By <span itemprop="author">Soho NYC Barbershop</span>
            Photographed in <span itemprop="contentLocation">New York, NY</span>
            Date uploaded:
            <meta itemprop="datePublished" content="2014-01-01">
            Jan 01, 2014
            <span itemprop="description">MEN`S HAIRCUT</span>
        </div>
        <div itemscope itemtype="http://schema.org/ImageObject">
            <h2 itemprop="name">MEN`S GROOMING in sohonycbarbers</h2>
            <img src="http://sohonycbarbers.com/wp-content/themes/nextlevel/img/Grooming_A.jpg" alt="MEN`S GROOMING" itemprop="contentUrl"/>By
            <span itemprop="author">Soho NYC Barbershop</span> Photographed in
            <span itemprop="contentLocation">New York, NY</span> Date uploaded:
            <meta itemprop="datePublished" content="2014-01-01">
            Jan 01, 2014
            <span itemprop="description">MEN`S GROOMING</span>
        </div>
        <div itemscope itemtype="http://schema.org/ImageObject">
            <h2 itemprop="name">MEN`S SHAVE in sohonycbarbers</h2>
            <img src="http://sohonycbarbers.com/wp-content/themes/nextlevel/img/01_B.jpg" alt="MEN`S SHAVE" itemprop="contentUrl"/>By
            <span itemprop="author">Soho NYC Barbershop</span> Photographed in
            <span itemprop="contentLocation">New York, NY</span> Date uploaded:
            <meta itemprop="datePublished" content="2014-01-01">
            Jan 01, 2014
            <span itemprop="description">MEN`S SHAVE</span>
        </div>
    </div>

</div>

<!-- Organization (org) minimum structure in example description --><!--
        Item
        type:   http://schema.org/organization
        property:
        name:   FlickShine
        url:    http://flickshine.com
        logo:   http://flickshine.com/logo.png
        address:
        Item 1
        telephone:  999-999-99-99
        email:  mail@mail.com
        description:    Web Studio
        openinghours:   Mo-Th 09:00-18:00
        maps:   URL of Map

        Item 1
        type:   http://schema.org/postaladdress
        property:
        streetaddress:  street
        postalcode: 11000
        addressregion:  NY
        addresslocality: New York, USA

        Item 1
        type:   http://schema.org/geocoordinates
        property:
        latitude:   43.720896
        longitude:  70.997118

        Item
        type:   http://schema.org/imageobject
        property:
        name:   Some Product
        contenturl: http://flickshine.com/logo.png
        author: Some Product
        contentlocation:    New York, NY
        datepublished:  2014-01-01
        description:   Good Product
    -->

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
