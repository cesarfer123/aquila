<?php
/**
 * 
 * Bootstraps the theme
 * 
 * @package Aquila
 */
 namespace AQUILA_THEME\Inc;
 use AQUILA_THEME\Inc\Traits\Singleton;

 class AQUILA_THEME{
    
    use singleton;

    protected function __construct()
    {   
        // wp_die("hola");
        // load class
        Assets::get_instance();
        Menus::get_instance();
        $this->setup_hooks();
    }

    protected function setup_hooks(){

        /**
         * Actions
         */

        add_action("after_setup_theme",[$this,"setup_theme"]);

    }

    public function setup_theme(){

        add_theme_support("title-tag");
        add_theme_support("custom-logo");
        add_theme_support( 'custom-background', [
            'default-color'     => '0000ff',
            'default-image'     => '',
            'default-repeat'    => 'no-repeat',
        ] );
        // añade la imagen destacada
        add_theme_support( 'post-thumbnails' );
        // registrar un tamaño de imagen
        add_image_size('featured-thumbnail',250,180,true);
        add_theme_support( 'post-thumbnails' );
        // Cuando añades este soporte en tu tema, significa que estás permitiendo que los widgets
        //  se actualicen de manera selectiva dentro del Personalizador sin recargar la página 
        // completa. Esto mejora la experiencia del usuario al permitir cambios rápidos y visuales en el diseño del sitio.
        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support('automatic-feed-links');
        add_theme_support('html5',[
            'comment-list', 
            'comment-form', 
            'search-form', 
            'gallery', 
            'caption', 
            'style', 
            'script'
        ]);

        add_editor_style();

        add_theme_support( 'wp-block-styles' );
        add_theme_support('align-wide');

    }


 }
