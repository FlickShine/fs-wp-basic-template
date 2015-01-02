<?php
/**
 * The Template for displaying all single posts
 *
 * @package fs-wp-basic-template
 * @copyright FlickShine
 */

get_header(); ?>

    <main class="width1180 cf" data-role="main">

        <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('content', get_post_format()); ?>

            <nav class="nav-single">
                <h3 class="assistive-text"><?php _e('Post navigation', 'twentytwelve'); ?></h3>
                <span
                    class="nav-previous"><?php previous_post_link('%link', '<span class="meta-nav">' . _x('&larr;', 'Previous post link', 'twentytwelve') . '</span> %title'); ?></span>
                <span
                    class="nav-next"><?php next_post_link('%link', '%title <span class="meta-nav">' . _x('&rarr;', 'Next post link', 'twentytwelve') . '</span>'); ?></span>
            </nav><!-- .nav-single -->

        <?php endwhile; // end of the loop. ?>

    </main>

<?php
get_footer();
