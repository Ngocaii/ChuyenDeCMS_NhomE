<?php
/**
 * Functions cho Theme Nhóm E
 */

// 1. Đăng ký vị trí Menu trong WordPress Admin
function nhome_theme_setup() {
    // Đăng ký vị trí menu với WordPress
    register_nav_menus( array(
        'primary-menu' => 'Primary Menu (Header Danh Mục)',
    ) );
}
add_action( 'after_setup_theme', 'nhome_theme_setup' );

// 2. Nạp file style.css vào website
function nhome_theme_scripts() {
    wp_enqueue_style( 'nhome-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'nhome_theme_scripts' );
