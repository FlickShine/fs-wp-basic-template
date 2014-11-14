<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage fs-wp-basic-template
 * @since fs-wp-basic-template 1.0
 */
?>

<footer class="cf">
    
    <div itemscope itemtype="http://schema.org/Organization">
        <span itemprop="name">FlickShine</span>
        <span><a href="http://flickshine.com" itemprop="url">flickshine.com</a></span>
        <img itemprop="logo" src="http://flickshine.com/wp-content/themes/mytheme/img/logo.png" />
        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <strong>Postal Address:</strong>
            <span itemprop="streetAddress">10-10 44 Ave Suite # 30, 4th floor</span>
            <span itemprop="postalCode">11101</span>
            <span itemprop="addressLocality">Long Island City, New York</span>
        </div>
        <strong>E-mail:</strong> <span itemprop="email"><a href="mailto:flickshine@gmail.com"><em>flickshine@gmail.com</em></a></span><br />
        <strong>Tel:</strong> <span itemprop="telephone"><em>(347)309-8959</em></span>
    </div>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "url": "http://flickshine.com",
            "logo": "http://flickshine.com/wp-content/themes/mytheme/img/logo.png",
            "contactPoint": [
                {
                    "@type": "ContactPoint",
                    "telephone": "(347)309-8959",
                    "contactType": "customer service"
            }]
        }
    </script>

    <div class="followus">
        <h2>Follow us</h2>
        <ul>
            <li><a class="twitter" href="#" target="_blank" rel="nofollow">Twitter</a></li>
            <li><a class="google" href="#" target="_blank" rel="nofollow">Google+</a></li>
            <li><a class="facebook" href="#" target="_blank" rel="nofollow">Facebook</a></li>
            <li><a class="yelp" href="#" target="_blank" rel="nofollow">Yelp</a></li>
            <li><a class="foursquare" href="#" target="_blank" rel="nofollow">Foursquare</a></li>
        </ul>
    </div>
    <div class="copyright">All rights reserved &copy; <span>Created By <a target="_blank" href="http://flickshine.com/" rel="nofollow">FlickShine</a></span></div>
</footer>

<?php wp_footer();?>
</body>
</html>
