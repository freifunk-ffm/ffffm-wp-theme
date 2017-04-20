<?php

namespace FFFFM\Theme;

class Theme
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'parentStyle']);
    }

    public function parentStyle()
    {
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    }
}
