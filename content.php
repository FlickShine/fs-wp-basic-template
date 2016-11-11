<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package fs-wp-basic-template
 * @copyright FlickShine
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (is_sticky() && is_home() && !is_paged()) : ?>
        <div class="featured-post">
            <?php _e('Featured post', 'twentytwelve'); ?>
        </div>
    <?php endif; ?>
    <header class="entry-header">
        <?php if (is_single()) : ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php else : ?>
            <h1 class="entry-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
            </h1>
        <?php endif; // is_single() ?>
    </header>
    <!-- .entry-header -->
    <span class="float-left">
        <?php if (!post_password_required() && !is_attachment()) :
            the_post_thumbnail();
        endif; ?>
    </span>
    <?php if (is_search()) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
    <?php else : ?>
        <div class="entry-content">
            <?php the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve')); ?>
            <?php wp_link_pages(array('before' => '<div class="page-links">' . __('Pages:', 'twentytwelve'), 'after' => '</div>')); ?>
        </div><!-- .entry-content -->
    <?php endif; ?>

    <footer class="entry-meta">
        <div class="seomarkup"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        <div class="seomarkup entry-published"><?php the_time('Y-m-d'); ?></div>
        <div class="seomarkup updated"><?php the_time('Y-m-d'); ?></div>
        <div class="seomarkup">
            <span class="vcard author fn">
                by <a
                    href="https://plus.google.com/+FlickShineNewYork?rel=author">GlobeElectricSupplyNewYork</a>
            </span>
        </div>
    </footer>

    <!-- .entry-meta -->
</article><!-- #post -->