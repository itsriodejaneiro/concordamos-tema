<?php

namespace jaci;

function custom_menus() {
    register_nav_menu('main-menu', __('Main menu', 'concordamos-theme'));
    /* register_nav_menu('footer-menu', __('Footer menu', 'concordamos-theme')); */

    register_nav_menu('social-networks', __('Social networks', 'concordamos-theme'));
    register_nav_menu('footer-menu-first', __('Footer menu 1', 'concordamos-theme'));
    register_nav_menu('footer-menu-second', __('Footer menu 2', 'concordamos-theme'));
    register_nav_menu('footer-menu-third', __('Footer menu 3', 'concordamos-theme'));
    register_nav_menu('footer-menu-fourth', __('Footer menu 4', 'concordamos-theme'));
}

add_action('init', 'jaci\\custom_menus');


// adiciona seta nos itens com subitens
add_filter('walker_nav_menu_start_el', 'jaci\\add_arrow', 10, 4);
function add_arrow($output, $item, $depth, $args) {

    //Only add class to 'top level' items on the 'primary' menu.
    if ($depth === 0) {
        if (in_array("menu-item-has-children", $item->classes)) {
            $output .= '<i class="fas fa-angle-down"></i>';
        }
    }
    return $output;
}

//Descomente para adicionar css para top menu (WIP)
// add_filter('css_files_before_output','jaci\\add_top_menu', 10, 1);
function add_top_menu($files){
    $files['top-menu'] = array(
        'file' => '_c-top-menu.css',
        'global' => true,
        'inline' => true,
    );
    return $files;
}
// Descomente para alterar menu para sempre funcionar como hamburguer
// add_filter('css_files_before_output','jaci\\sempre_hamburguer', 10, 1);
function sempre_hamburguer($files){
    $files['sempre-hamburguer'] = array(
        'file' => 'menu-sempre-hamburguer.css',
        'global' => true,
        'inline' => true,
    );
    return $files;
}

function wp_nav_menu_items( $items, $args ) {
	if ( $args->theme_location === 'main-menu' && ! empty( \Concordamos\get_wpml_locales() ) ) {
		$template = file_get_contents( __DIR__ . '/twig/wpml-dropdown.twig' );
		$shortcode = '[wpml_language_switcher]' . $template . '[/wpml_language_switcher]';

		$items .= do_shortcode($shortcode);
	}

	return $items;
}
add_filter( 'wp_nav_menu_items', 'jaci\wp_nav_menu_items', 100, 2 );
