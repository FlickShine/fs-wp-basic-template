<?php
/**
 * The template for displaying the footer
 *
 * @package fs-wp-basic-template
 * @copyright FlickShine
 */
?>

<footer class="cf" data-role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

    <div class="followus">
        <h2>Follow us
            <span class="g-follow" data-annotation="none" data-height="15" data-href="https://plus.google.com/102732788061155796748" data-rel="publisher"></span>
        </h2>
        <ul>
            <li>
                <a class="twitter" href="#" target="_blank">Twitter</a>
            </li>
            <li>
                <a class="google" href="#" target="_blank">Google+</a>
                <a class="seomarkup" href="http://plus.google.com/102075132768670729938" rel="publisher" target="_blank"></a>
            </li>
            <li>
                <a class="facebook" href="#" target="_blank">Facebook</a>
            </li>
            <li>
                <a class="yelp" href="#" target="_blank">Yelp</a>
            </li>
            <li>
                <a class="foursquare" href="#" target="_blank">Foursquare</a>
            </li>
        </ul>
    </div>

    <div class="copyright">
        <!-- JavaScript echo Copyright & Year, and ofcourse better if COPY will be in UTF-8 format: ©
        &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script> -->
        <?php echo '&copy; ' . date('Y') . ' <a href="' . home_url('/') . '" title="' . esc_attr(get_bloginfo('name', 'display')) . '">' . esc_attr(get_bloginfo('name')) . '</a>'; ?>
    </div>

    <!--
    <div class="scroll-top">
		<a href="#scroll-top" title="">&uarr;</a>
	</div>
	-->

    <small>
        Created By <a target="_blank" href="http://flickshine.com/">FlickShine</a>
    </small>

    <?php wp_footer(); ?>
</footer>

<script>
    (function () {
        var po = document.createElement('script');
        po.type = 'text/javascript';
        po.async = true;
        po.src = 'https://apis.google.com/js/platform.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(po, s);
    })();
</script>

</body>
</html>
