<?php
 function blog_assets() {
    wp_enqueue_style('vendor', get_template_directory_uri() .'/assets/css/vendor.css');
    
    wp_enqueue_style('style', get_template_directory_uri() .'/assets/css/style.css');

    wp_enqueue_script('main', get_template_directory_uri() .'/assets/js/main.js', array(), '20151215', true);
}
add_action('wp_enqueue_scripts', 'blog_assets');
add_theme_support('menus');
          