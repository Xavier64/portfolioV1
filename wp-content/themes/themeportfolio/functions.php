<?php

function montheme_supports () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

function montheme_document_title_parts ($title) { /* Variable $title dans general-template.php */
    unset($title['tagline']); /* Pour enlever la phrase "Un site utilisant Wordpress" dans le navigateur */
    return $title;
}

function enregistre_mon_menu() { /* Pour la NavBar */
    register_nav_menu( 'menu_principal', __( 'Menu principal' ) );
}

/* HOOK */
add_action('after_setup_theme', 'montheme_supports');
add_action( 'init', 'enregistre_mon_menu' );

/* FILTER */
add_filter('document_title_parts', 'montheme_document_title_parts');