<?php
/**
 * fs-wp-basic-template functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package fs-wp-basic-template
 * @copyright FlickShine
 */

add_theme_support('post-thumbnails');
set_post_thumbnail_size(380, 260, true);
add_theme_support('post-formats', array('aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',));

// remove some auto-generated things

remove_action('wp_head', 'wp_generator'); // MUSTHAVE!
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');

remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.


if (!function_exists('user_meta')):
    /**
     * Set up post entry meta.
     * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
     * Create your own fs-wp-basic-template_entry_meta() to override in a child theme.
     *
     * @since fs-wp-basic-template 1.0
     */
    function user_meta()
    {
        // Translators: used between list items, there is a space after the comma.
        $categories_list = get_the_category_list(__(', ', 'fs-wp-basic-template'));

        // Translators: used between list items, there is a space after the comma.
        $tag_list = get_the_tag_list('', __(', ', 'fs-wp-basic-template'));

        $date = sprintf('<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
            esc_url(get_permalink()),
            esc_attr(get_the_time()),
            esc_attr(get_the_date('c')),
            esc_html(get_the_date())
        );

        $author = sprintf('<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
            esc_url(get_author_posts_url(get_the_author_meta('ID'))),
            esc_attr(sprintf(__('View all posts by %s', 'fs-wp-basic-template'), get_the_author())),
            get_the_author()
        );

        // Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
        if ($tag_list) {
            $utility_text = __('This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'fs-wp-basic-template');
        } elseif ($categories_list) {
            $utility_text = __('This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'fs-wp-basic-template');
        } else {
            $utility_text = __('This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'fs-wp-basic-template');
        }

        printf(
            $utility_text,
            $categories_list,
            $tag_list,
            $date,
            $author
        );
    }
endif;

function register_my_menu()
{
    register_nav_menu('header-menu', __('Header Menu'));
}

add_action('init', 'register_my_menu');

/**
 * Create a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @since Twenty Fourteen 1.0
 *
 * @global int $paged WordPress archive pagination page count.
 * @global int $page WordPress paginated post page count.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */

function fs_wp_basic_template_wp_title($title, $sep)
{
    global $paged, $page;

    if (is_feed()) {
        return $title;
    }
    $title .= get_bloginfo('name', 'display');
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && (is_home() || is_front_page())) {
        $title = "$title $sep $site_description";
    }
    if (($paged >= 2 || $page >= 2) && !is_404()) {
        $title = "$title $sep " . sprintf(__('Page %s', 'fs-wp-basic-template'), max($paged, $page));
    }

    return $title;
}

add_filter('wp_title', 'fs_wp_basic_template_wp_title', 10, 2);
