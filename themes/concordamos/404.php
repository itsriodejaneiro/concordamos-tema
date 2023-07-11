<?php get_header(); ?>
<div class="error-404">
        <h1>
            <span class="error"><?php _e('erro', 'concordamos-textdomain') ?></span>
            <span class="num">404</span>
        </h1>

        <p><?php _e('Página não encontrada', 'concordamos-textdomain') ?></p>
        <a href="<?= home_url() ?>" class="button"> <span><?php _e('Voltar para a página inicial', 'concordamos-textdomain') ?></span> </a>
    </div>

<?php get_footer(); ?>
