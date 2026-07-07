<?php
/**
 * Aura Wellness Vercel Uyumluluk ve WordPress Taklit Fonksiyonları
 */

if (!function_exists('get_header')) {
    function get_header() { include 'header.php'; }
}
if (!function_exists('get_footer')) {
    function get_footer() { include 'footer.php'; }
}
if (!function_exists('language_attributes')) {
    function language_attributes() { echo 'lang="tr"'; }
}
if (!function_exists('bloginfo')) {
    function bloginfo($show = '') { if ($show === 'charset') { echo 'UTF-8'; } }
}
if (!function_exists('wp_head')) {
    function wp_head() { echo '<link rel="stylesheet" href="style.css">'; }
}
if (!function_exists('body_class')) {
    function body_class() { echo 'class="home blog"'; }
}
if (!function_exists('wp_body_open')) {
    function wp_body_open() {}
}
if (!function_exists('wp_footer')) {
    function wp_footer() {}
}
if (!function_exists('esc_url')) {
    function esc_url($url) { return $url; }
}
if (!function_exists('home_url')) {
    function home_url($path = '') {
        if ($path === '/' || $path === '') { return 'index.php'; }
        if (strpos($path, 'terapistlerimiz') !== false) { return 'page-terapistler.php'; }
        return $path;
    }
}
if (!function_exists('get_template_directory_uri')) {
    function get_template_directory_uri() { return '.'; }
}
if (!function_exists('add_action')) {
    function add_action($hook, $function) {}
}
if (!function_exists('add_theme_support')) {
    function add_theme_support($feature, $options = null) {}
}