<?php
/**
 * 
 * Register Menu
 * 
 * @package Aquila
 */
 namespace AQUILA_THEME\Inc;
 use AQUILA_THEME\Inc\Traits\Singleton;

 class Menus{
    
    use singleton;
    protected function __construct()
    {   

        $this->setup_hooks();
    }

    protected function setup_hooks(){

        /**
         * Actions
         */
        add_action( 'init',[$this,'register_menu'] );


    }

    public function register_menu() {
        register_nav_menus(
          array(
            'aquila-header-menu' => esc_html__( 'Aquila Header Menu' ,'aquila'),
            'aquila-extra-menu' => esc_html__( 'Aquila Extra Menu' ,'aquila')
           )
         );
    }

    public function get_menu_id($location){
        // get all the locations
        $locations=get_nav_menu_locations();

        // get object id y location
        $menu_id=$locations[$location];

        return !empty($menu_id) ? $menu_id :'';
        // show($menu_id);
    }
     


    
 }
