<?php
/**====================================
 * Widgest Register 
 ======================================*/

?>
<?php


//Sidebar Function Area
function elspoint_sidebar_area(){
    register_sidebar(array(
        'name'=> __('Main Widgets Area','elspointremotework'),
        'id'=>'sidebar-1',
        'description'=>__('Apearse in Main Sidebar Area wich is show on every pages', 'elspointremotework'),
        'before_widget'=>'<div class="child-sidebar">',
        'after_widget'=>'</div>',
        'before_title'=>'<h2 class="title">',
        'after_title'=>'</h2>'

    ));
}
add_action('widgets_init','elspoint_sidebar_area');
?>