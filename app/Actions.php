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
    }

    public function registerScripts() {
        wp_enqueue_script('jquery');
        wp_enqueue_script('main', get_template_directory_uri() . '/dist/main.min.js', ['jquery'], null, true);
    }

    public function registerMenus() {
        register_nav_menus(array(
            'primary' => esc_html__( 'Primary Menu', 'vist' ),
            'secondary' => esc_html__( 'Secondary Menu', 'vist' ),
            'footer' => esc_html__( 'Footer Menu', 'vist' ),
        ));
    }
}

