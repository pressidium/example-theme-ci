<?php
// Demonstration purposes only
get_header();
?>

<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php
            while ( have_posts() ) : the_post();
                get_template_part( 'components/page/content', 'page' );
            endwhile;
            ?>
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
