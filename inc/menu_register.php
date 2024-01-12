<?php

/*=================================
* wp Menu Register
 ==================================*/

 register_nav_menu( 'main_menu', __('Main Menu', 'elspointremotework'),'false' );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}