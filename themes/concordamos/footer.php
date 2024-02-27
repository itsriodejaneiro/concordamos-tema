</div>
<?php wp_reset_postdata() ?>

<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 footer-widgets-area">
                <?php dynamic_sidebar('footer_widgets') ?>
            </div>
        </div>
    </div>
    
    <?php get_template_part( 'template-parts/site-by-hacklab' ); ?>
    
</footer>
<?php wp_footer() ?>

</body>
</html>