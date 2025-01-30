<?php

// Inclure le fichier des fonctions API REST
include get_template_directory() . '/include/ajax.php';

// Enregistrement des styles CSS du thème avec filemtime pour contrôler le cache
function novaneos_enqueue_styles() {
    wp_enqueue_style('novaneos-theme-style', get_template_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_template_directory() . '/assets/css/theme.css'));
}

// Enregistrement des fichiers JS avec filemtime et chargement en pied de page
function novaneos_enqueue_scripts() {
    // Liste des fichiers JS à charger
    $scripts = [
        'novaneos-script-main' => 'scripts.js',
        'novaneos-script-menu' => 'menu.js',
        'novaneos-script-home' => 'home.js',
    ];

    foreach ($scripts as $handle => $file) {
        wp_enqueue_script(
            $handle,
            get_template_directory_uri() . '/js/' . $file,
            array('jquery'), // Dépendances
            filemtime(get_template_directory() . '/js/' . $file), // Gestion du cache
            true // Chargement en pied de page
        );
    }

    // Localisation de l'URL AJAX et de l'URL REST après l'enregistrement des scripts
    wp_localize_script('novaneos-script-main', 'novaneos_js', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'rest_url' => esc_url(rest_url('wp/v2/')), // Ajout de l'URL de l'API REST
        'nonce'    => wp_create_nonce('novaneos-script-main'),        
    ));
}

// Enregistrement des emplacements de menus du thème
function novaneos_register_menus() {
    register_nav_menu('main', "Menu principal");
    register_nav_menu('footer', "Menu pied de page");
}

// Enregistrement du logo du site via le menu wordpress
function novaneos_logo() {
    add_theme_support('custom-logo', array(
        'height'      => 100,  // Hauteur recommandée 
        'width'       => 300,  // Largeur recommandée
        'flex-height' => true, // Permet d'ajuster librement la hauteur
        'flex-width'  => true, // Permet d'ajuster librement la largeur
    ));
}

// Actions pour charger les styles, scripts et menus
add_action('wp_enqueue_scripts', 'novaneos_enqueue_styles');
add_action('wp_enqueue_scripts', 'novaneos_enqueue_scripts');
add_action('after_setup_theme', 'novaneos_register_menus');
add_action('after_setup_theme', 'novaneos_logo');
?>
