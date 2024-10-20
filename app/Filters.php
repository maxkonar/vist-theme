<?php

namespace App;

class Filters {
    public function init() {
       add_filter('acf/settings/save_json', [$this, 'acfSaveJson']);
       add_filter('acf/settings/load_json', [$this, 'acfLoadJson'], 10, 1);
       add_filter('use_block_editor_for_post', '__return_false');
       add_filter( 'show_admin_bar', '__return_false' );
    }
    
    public function acfSaveJson() {
        return get_template_directory() . '/acf-json';
    }

    public function acfLoadJson($paths) {
        $paths[] = get_template_directory() . '/acf-json';
        return $paths;
    }
}