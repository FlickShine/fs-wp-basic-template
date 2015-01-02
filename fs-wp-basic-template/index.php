<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package fs-wp-basic-template
 * @copyright FlickShine
 */

get_header();?>
    <main id="content" class="width1180 cf" data-role="main">
        <section>
            <?php
            if (have_posts()):
                while (have_posts()):the_post();
                    ?>
                    <div class="cf">

                        <div class="seomarkup"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <div class="seomarkup entry-published"><?php the_time('Y-m-d'); ?></div>
                        <div class="seomarkup updated"><?php the_time('Y-m-d'); ?></div>
                        <div class="seomarkup">
                            <span class="vcard author fn">
                                by <a href="https://plus.google.com/+FlickShineNewYork?rel=author">FlickShineNewYork</a>
                            </span>
                        </div>

                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <span class="dejavu_meta"><?php user_meta(); ?></span>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        <?php the_excerpt(); ?>
                        <div class="read_more"><a href="<?php the_permalink(); ?>">Read more</a></div>
                    </div>
                <?php endwhile; ?>
                <div class="blog-pagination">
                    <?php echo paginate_links($args = array('prev_text' => __('« Preview'), 'next_text' => __('Next »'), 'type' => 'list',)); ?>
                </div>
            <?php endif; ?>
            <article></article>

        </section>
        <aside></aside>
    </main>

<?php
get_footer();
