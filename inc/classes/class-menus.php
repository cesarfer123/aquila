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
     

    public function get_child_menu_items($menu_array,$parent_id){

        $child_menus=[];
        if(!empty($menu_array) && is_array($menu_array)){
            foreach ($menu_array as $menu) {
                if(intval($menu->menu_item_parent)===$parent_id){
                    array_push($child_menus,$menu);
                }
            }
        }

        return $child_menus;
    }


    
 }
