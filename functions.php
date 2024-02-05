<?php
    add_action("wp_enqueue_scripts", "add_scripts_and_styles");
    add_action("after_setup_theme", "add_menu");

    function add_scripts_and_styles() {
        wp_enqueue_style("style", get_stylesheet_uri());
        wp_enqueue_style("default_style", get_template_directory_uri() . "/assets/css/style.css");
        wp_enqueue_style("media_style", get_template_directory_uri() . "/assets/css/style-media.css");
        if (is_page('Home')) {
            wp_enqueue_style('custom-styles', get_template_directory_uri() . '/assets/css/custom-index-style.css');
        }
        wp_enqueue_style("header_conf", get_template_directory_uri() . "/assets/css/header-additional-conf.css");
        wp_enqueue_style("icon", get_template_directory_uri() . "/assets/image/icon/style.css");
        wp_enqueue_style("font", get_template_directory_uri() . "/assets/fonts/stylesheet.css");
        
        wp_enqueue_script("script", get_template_directory_uri() . "/assets/js/script.js", array(), "1.0.0", true );
        wp_enqueue_script("burger_menu", get_template_directory_uri() . "/assets/js/burgerMenu.js", array(), "1.0.0", true );
        wp_enqueue_script("slider", get_template_directory_uri() . "/assets/js/slider.js", array(), "1.0.0", true );
        if (is_page('Home')) {
            wp_enqueue_script("index", get_template_directory_uri() . "/assets/js/index.js", array(), "1.0.0", true );
        }
    }

    function add_menu(){
        register_nav_menu( "top", "main menu" );
        register_nav_menu( "bottom", "footer menu" );
    }
    
?>