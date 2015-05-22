<?php
/**
 * Template Name: Home Page
 *
 * @package fs-wp-basic-template
 * @copyright FlickShine
 */

get_header(); ?>

    <main class="main cf" data-role="main">

        <article>
            <?php
            if (have_posts()):
                while (have_posts()):the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </article>

        <aside></aside>
    </main>

<?php
get_footer();
