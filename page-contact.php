<?php
/*
Template Name: Contact
*/
/**
 * The Template for displaying contact page
 *
 * @package WordPress
 * @subpackage novaneos theme
 * @since novaneos 1.0
 */
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/content', 'page');
        endwhile;
        ?>
        <h1>test pour voir</h1>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>