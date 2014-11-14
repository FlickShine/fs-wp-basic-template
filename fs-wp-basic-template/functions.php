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
 * @package WordPress
 * @subpackage fs-wp-basic-template
 * @since fs-wp-basic-template 1.0
 */

add_theme_support('post-thumbnails');
set_post_thumbnail_size(380, 260, true);
add_theme_support('post-formats', array('aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',));
remove_action('wp_head', 'wp_generator');

if(!function_exists('user_meta')):
    /**
     * Set up post entry meta.
     * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
     * Create your own fs-wp-basic-template_entry_meta() to override in a child theme.
     * @since fs-wp-basic-template 1.0
     */
    function user_meta() {
        // Translators: used between list items, there is a space after the comma.
        $categories_list = get_the_category_list( __( ', ', 'fs-wp-basic-template' ) );

        // Translators: used between list items, there is a space after the comma.
        $tag_list = get_the_tag_list( '', __( ', ', 'fs-wp-basic-template' ) );

        $date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
            esc_url( get_permalink() ),
            esc_attr( get_the_time() ),
            esc_attr( get_the_date( 'c' ) ),
            esc_html( get_the_date() )
        );

        $author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
            esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
            esc_attr( sprintf( __( 'View all posts by %s', 'fs-wp-basic-template' ), get_the_author() ) ),
            get_the_author()
        );

        // Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
        if ( $tag_list ) {
            $utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'fs-wp-basic-template' );
        } elseif ( $categories_list ) {
            $utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'fs-wp-basic-template' );
        } else {
            $utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'fs-wp-basic-template' );
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

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}

add_action( 'init', 'register_my_menu' );
