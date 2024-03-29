<!DOCTYPE html>
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes();?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset');?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1.0">
	<?php wp_head()?>
	<title><?= is_front_page() ? get_bloginfo('name') : wp_title()?></title>
	<link rel="icon" href="<?= get_site_icon_url() ?>" />
</head>
<body <?php body_class();?>>
    <?php
    /**
     * @link https://developer.wordpress.org/reference/hooks/wp_body_open/
     */
    if ( function_exists( 'wp_body_open' ) )
        wp_body_open();
    ?>
    <header class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 header-content">
                    <div class="logo">
                        <a href="<?= home_url() ?>">
                            <?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            if ( has_custom_logo() ) {
                                the_custom_logo();
                            } else { ?>
                                <img src="<?= get_template_directory_uri() ?>/assets/images/logo.png" width="200" alt="<?= get_bloginfo( 'name' ) ?>">
                            <?php
                            }
                            ?>
                        </a>
                    </div>
                    <button menu-container-class='primary-menu' class="toggle-menu" aria-label="<?= __('Toggle menu visibility', "concordamos-theme") ?>">

                    </button>

                    <div class="menus">
                        <?= wp_nav_menu(['theme_location' => 'main-menu', 'container' => 'nav', 'menu_id' => 'main-menu', 'menu_class' => 'menu', 'container_class' => 'primary-menu']) ?>
                        <?= the_social_networks_menu() ?>
                        <div class='header-login'>

                        <?php
                            if(is_user_logged_in()) {
                            ?>
                                <a href="<?= get_permalink( Concordamos\get_page_by_template( 'concordamos/template-my-account.php' ) ) ?>"><?php _e('My account', 'concordamos-theme'); ?></a>
                            <?php
                            } else {
                            ?>
                                <a href="<?= get_permalink( Concordamos\get_page_by_template( 'concordamos/template-login.php' ) ) ?>"><?php _e('Login', 'concordamos-theme'); ?></a>
                            <?php
                            }
                            ?>

                        </div>

                    </div>

                </div>
            </div>
        </div>

	</header>
	<div id="app">
