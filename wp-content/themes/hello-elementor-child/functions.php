<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style','hello-elementor-header-footer' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 9223372036854775807 );

// END ENQUEUE PARENT ACTION
function ajouter_classe_css_lien_admin( $classes, $item ) {
    // Vérifie si l'utilisateur est connecté
    if ( ! is_user_logged_in() && $item->url === 'http://localhost:10011/wp-admin/index.php' ) {
        // Ajoute la classe CSS uniquement si l'utilisateur n'est pas connecté
        $classes[] = 'admin-menu-item';
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'ajouter_classe_css_lien_admin', 10, 2 );