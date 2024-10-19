<?php

namespace App;

class Helpers{
    public static function printSvg(string $file, string $path = '/assets/svg/')
    {
        echo file_get_contents(get_stylesheet_directory() . $path . $file);
    }

    public static function getImage(string $file, string $path = '/assets/images/')
    {
        $image = get_stylesheet_directory_uri() . $path . $file;
        return $image;
    }
}