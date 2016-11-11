<?php
/**
 * Template Name: Full Width Page
 *
 * @package fs-wp-basic-template
 * @copyright FlickShine
 */

get_header(); ?>

    <div class="">

        <?php
        if (is_front_page() && twentyfourteen_has_featured_posts()) {
            // Include the featured content template.
            get_template_part('featured-content');
        }
        ?>

        <div id="content" class="" role="main">
            <?php
            // Start the Loop.
            while (have_posts()) : the_post();
                // Include the page content template.
                get_template_part('content', 'page');
                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }
            endwhile;
            ?>
        </div>
    </div>

<?php
get_sidebar();
get_footer();
