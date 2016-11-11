<?php
/**
* The template for displaying the page
*
* @package fs-wp-basic-template
* @copyright FlickShine
*/

get_header(); ?>

<?php
if (have_posts()):
    while (have_posts()) : the_post();
        the_content();
    endwhile;
 else:
    echo '<p>' , __('Sorry, no posts matched your criteria.'), '</p>';
endif;
?>

<section class="cf">
    <!-- Your custom content or html/php here -->
</section>

<?php
get_footer();
