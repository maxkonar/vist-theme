<?php

namespace App;

class Actions {
    public function init() {
        add_action('wp_enqueue_scripts', [$this, 'registerStyles']);
        add_action('wp_enqueue_scripts', [$this, 'registerScripts'], 20);
        add_action('init', [$this, 'registerMenus']);
    }

    public function registerStyles() {
        wp_enqueue_style('main', get_template_directory_uri() . '/dist/style.min.css', [], null, 'all');
        wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], null, 'all');
        wp_enqueue_style('aos-css', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css');
    }

    public function registerScripts() {
        wp_enqueue_script('jquery');
        wp_enqueue_script('main', get_template_directory_uri() . '/dist/main.min.js', ['jquery'], null, true);
        wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], null, true);
        wp_enqueue_script('aos-js', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', array(), null, true);
        wp_add_inline_script('aos-js', 'AOS.init();');
    }

    public function registerMenus() {
        register_nav_menus(array(
            'primary' => esc_html__( 'Primary Menu', 'vist' ),
            'secondary' => esc_html__( 'Secondary Menu', 'vist' ),
            'footer' => esc_html__( 'Footer Menu', 'vist' ),
        ));
    }
}

