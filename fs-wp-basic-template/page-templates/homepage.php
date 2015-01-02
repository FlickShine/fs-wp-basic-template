<?php
/**
 * Template Name: Home Page
 *
 * @package fs-wp-basic-template
 * @copyright FlickShine
 */

get_header(); ?>

    <main class="cf" data-role="main">

        <aside>

        </aside>

        <article>
            <?php
            if (have_posts()):
                while (have_posts()):the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </article>
    </main>

<?php
get_footer();