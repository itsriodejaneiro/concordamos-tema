<?php
/**
 * Template Name: Pagebuilder without titles
 */
get_header();
the_post();
?>

<div>
    <?php the_content(); ?>
</div>

<?php get_footer(); ?>
