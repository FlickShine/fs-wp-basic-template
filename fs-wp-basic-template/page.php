<?php get_header();?>
<?php
if (have_posts()):
    while (have_posts()) : the_post();
        the_content();
    endwhile;
endif;
?>

<section class="cf">
    <!-- Your custom content or html/php here -->
</section>

<?php
get_footer();