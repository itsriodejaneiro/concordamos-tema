<?php get_header(); ?>
<div class="error-404">
        <h1>
            <span class="error"><?php _e('Error', 'concordamos-theme') ?></span>
            <span class="num">404</span>
        </h1>

        <p><?php _e('Page not found', 'concordamos-theme') ?></p>
        <a href="<?= home_url() ?>" class="button"> <span><?php _e('Back to home', 'concordamos-theme') ?></span> </a>
    </div>

<?php get_footer(); ?>
