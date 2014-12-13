<?php
/**
 * The template for displaying the footer
 *
 * @package fs-wp-basic-template
 * @copyright FlickShine
 */
?>

<footer class="cf" data-role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

    <!-- example of schema.org for HairSalon -->
    <div class="seomarkup" itemscope itemtype="http://schema.org/HairSalon">
        <span itemprop="name" class="fn">SohoNYCbarbers</span>

        <a itemprop="url" href="http://sohonycbarbers.com">sohonycbarbers.com</a>

        <img itemprop="logo" src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="logo"/>

        <div itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates">
            <meta itemprop="latitude" content="40.720896"/>
            <meta itemprop="longitude" content="73.997118"/>
        </div>

        <span itemprop="telephone">(212)966-6069</span>

        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <span itemprop="streetAddress">396 Broome St</span>
            <span itemprop="addressLocality">New York</span>,
            <span itemprop="addressRegion">NY</span>
            <span itemprop="postalCode">10013</span>
        </div>

        <span itemprop="email"><a href="mailto:sohonycbarbers@gmail.com"><em>sohonycbarbers@gmail.com</em></a></span>

        <span itemprop="priceRange">$$</span>

        <span itemprop="description">All Men’s Haircut, Grooming, Shave. We will go all out to make You look and feel fabulous.</span>

        <div itemprop="review" itemscope itemtype="http://schema.org/Review">
            <span itemprop="author">Mark Bearak</span>
            <span itemprop="itemReviewed">SohoNYCbarbers</span>
            <meta itemprop="datePublished" content="2014-09-14">
            September 14, 2014
            <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                <span itemprop="ratingValue">5</span>/
                <span itemprop="bestRating">5</span>stars
            </div>
            <span itemprop="description">Great location, chill environment and clean quick haircut.</span>
        </div>
        <div itemprop="review" itemscope itemtype="http://schema.org/Review">
            <span itemprop="author">Joseph Ibragimov</span>
            <span itemprop="itemReviewed">SohoNYCbarbers</span>
            <meta itemprop="datePublished" content="2013-11-28">
            November 28, 2013
            <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                <span itemprop="ratingValue">5</span>/
                <span itemprop="bestRating">5</span>stars
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

        <a itemprop="maps"
           href="http://maps.google.com/maps?ll=40.720896,-73.997118&amp;z=15&amp;t=m&amp;hl=ru-RU&amp;gl=UA&amp;mapclient=embed&amp;q=396%20Broome%20St%20New%20York%2C%20NY%2010013%20%D0%A1%D0%A8%D0%90">URL
            of Map</a>

        <div itemscope itemtype="http://schema.org/photos">
            <div itemscope itemtype="http://schema.org/ImageObject">
                <h2 itemprop="name">MEN`S HAIRCUT in sohonycbarbers</h2>
                <img src="http://sohonycbarbers.com/wp-content/themes/nextlevel/img/haircut_A.jpg" alt="MEN`S HAIRCUT"
                     itemprop="contentUrl"/>By <span itemprop="author">Soho NYC Barbershop</span>
                Photographed in
                <span itemprop="contentLocation">New York, NY</span>
                Date uploaded:
                <meta itemprop="datePublished" content="2014-01-01">
                Jan 01, 2014
                <span itemprop="description">MEN`S HAIRCUT</span>
            </div>
            <div itemscope itemtype="http://schema.org/ImageObject">
                <h2 itemprop="name">MEN`S GROOMING in sohonycbarbers</h2>
                <img src="http://sohonycbarbers.com/wp-content/themes/nextlevel/img/Grooming_A.jpg" alt="MEN`S GROOMING"
                     itemprop="contentUrl"/>By <span itemprop="author">Soho NYC Barbershop</span>
                Photographed in
                <span itemprop="contentLocation">New York, NY</span>
                Date uploaded:
                <meta itemprop="datePublished" content="2014-01-01">
                Jan 01, 2014
                <span itemprop="description">MEN`S GROOMING</span>
            </div>
            <div itemscope itemtype="http://schema.org/ImageObject">
                <h2 itemprop="name">MEN`S SHAVE in sohonycbarbers</h2>
                <img src="http://sohonycbarbers.com/wp-content/themes/nextlevel/img/01_B.jpg" alt="MEN`S SHAVE"
                     itemprop="contentUrl"/>By <span itemprop="author">Soho NYC Barbershop</span>
                Photographed in
                <span itemprop="contentLocation">New York, NY</span>
                Date uploaded:
                <meta itemprop="datePublished" content="2014-01-01">
                Jan 01, 2014
                <span itemprop="description">MEN`S SHAVE</span>
            </div>
        </div>

    </div>

    <div class="followus">
        <h2>Follow us <span class="g-follow" data-annotation="none" data-height="15"
                            data-href="https://plus.google.com/102732788061155796748" data-rel="publisher"></span></h2>
        <ul>
            <li><a class="twitter" href="#" target="_blank">Twitter</a>
            </li>
            <li>
                <a class="google" href="#" target="_blank">Google+</a>
                <a class="seomarkup" href="http://plus.google.com/102075132768670729938" rel="publisher"
                   target="_blank"></a>
            </li>
            <li><a class="facebook" href="#" target="_blank">Facebook</a>
            </li>
            <li><a class="yelp" href="#" target="_blank">Yelp</a>
            </li>
            <li><a class="foursquare" href="#" target="_blank">Foursquare</a>
            </li>
        </ul>
    </div>

    <div class="copyright">
        <?php echo '&copy; ' . date('Y') . ' <a href="' . home_url('/') . '" title="' . esc_attr(get_bloginfo('name', 'display')) . '">' . esc_attr(get_bloginfo('name')) . '</a>'; ?>
    </div>

    <!--
    <div class="scroll-top">
		<a href="#scroll-top" title="">'&uarr;'</a>
	</div>
	-->

    <div class="createdby">
        <span>Created By <a target="_blank" href="http://flickshine.com/">FlickShine</a></span>
    </div>

    <?php wp_footer(); ?>
</footer>
<script type="text/javascript">(function () {
        var po = document.createElement('script');
        po.type = 'text/javascript';
        po.async = true;
        po.src = 'https://apis.google.com/js/platform.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(po, s);
    })();</script>


</body>
</html>
