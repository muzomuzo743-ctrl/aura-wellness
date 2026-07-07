<?php
/**
 * Aura Wellness Tema Fonksiyonları
 */

if ( ! function_exists( 'aura_wellness_setup' ) ) :
    function aura_wellness_setup() {
        // WordPress otomatik sayfa başlığı desteği
        add_theme_support( 'title-tag' );

        // Öne çıkan görsel (Post Thumbnail) desteği
        add_theme_support( 'post-thumbnails' );

        // HTML5 bileşen desteği
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ) );
    }
endif;
add_action( 'after_setup_theme', 'aura_wellness_setup' );

/**
 * Tema CSS ve JavaScript Dosyalarını Yükleme
 */
function aura_wellness_scripts() {
    // style.css dosyasını yükler
    wp_enqueue_style( 'aura-wellness-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'aura_wellness_scripts' );