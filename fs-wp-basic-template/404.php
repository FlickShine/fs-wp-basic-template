<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package fs-wp-basic-template
 * @copyright FlickShine
 */

get_header(); ?>

    <div id="content" class="main cf" role="main">
        <header class="page-header">
            <h1 class="page-title"><?php _e('Not Found', 'twentyfourteen'); ?></h1>
        </header>

        <div class="page-content">
            <p><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'twentyfourteen'); ?></p>
            <?php get_search_form(); ?>
        </div>
        <!-- .page-content -->
    </div><!-- #content -->

<?php
#get_sidebar( 'content' );
#get_sidebar();
get_footer();
