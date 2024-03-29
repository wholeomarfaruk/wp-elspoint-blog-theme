<?php
/**====================================
 * QUERY FUNCTIONS
 ======================================*/
 function get_categories_select()
{
  $teh_cats = get_categories();
  $results = [];

  $count = count($teh_cats);
  for ($i = 0; $i < $count; $i++) {
    if (isset($teh_cats[$i]))
      $results[$teh_cats[$i]->slug] = $teh_cats[$i]->name;
    else
      $count++;
  }
  return $results;
}
/*============================
* WP Theme functions 
==============================*/

function elspoint_customization($wp_customize){
    // Header Area
    $wp_customize->add_section('elspoint_header_area', array(
        'title'=>__('Header Area','elspointremotework'),
        'priority'   => 30,
        'description'=> 'If you can change anything in header area you do it from here.',
    ));

    $wp_customize->add_setting('elspoint_logo',array(
        'default'=> get_bloginfo('template_directory').'/img/logo.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'elspoint_logo',array(
        'label'=> __('Change Logo', 'elspointremotework'),
        'description'=>'You can change your site header logo from here.',
        'section'=> 'elspoint_header_area',
        'settings'=> 'elspoint_logo',
    )));

        // Menu position
        $wp_customize->add_section('elspoint_menu_position_area', array(
            'title'=>__('Menu & Search bar Position','elspointremotework'),
            'description'=> 'You can change menu poision or hide search bar.',
        ));
    
        $wp_customize->add_setting('elspoint_menu_position',array(
            'default'=> 'left_menu',
        ));
    
        $wp_customize->add_control('elspoint_menu_position',array(
            'label'=> __('Menu Settings', 'elspointremotework'),
            'description'=>'Change Menu Position or Hide search bar',
            'section'=> 'elspoint_menu_position_area',
            'settings'=> 'elspoint_menu_position',
            'type'=> 'radio',
            'choices'=> array(
            'left_menu'=>'Left Menu',
            'right_menu'=>'Right Menu',
            'center_menu'=> 'Center Menu',
            'left_menu_no_search_bar'=>'Left Menu hidden Search bar',
            'right_menu_no_search_bar'=>'Right Menu hidden Search bar',
            )
        ));
  
       
          // Copyright section setting
      
        $wp_customize->add_section('elspoint_footer_area', array(
            'title'=>__('Footer Area','elspointremotework'),
            'description'=> 'You can change copyright text or update from here.',
        ));
    
        $wp_customize->add_setting('elspoint_copyright_text',array(
            'default'=> '&copy copyrights 2024 | Develop by Elspoint',
        ));
    
        $wp_customize->add_control('elspoint_copyright_text',array(
            'label'=> __('Update copyrights Text', 'elspointremotework'),
            'description'=>'You can update copyrights text from here.',
            'section'=> 'elspoint_footer_area',
            'settings'=> 'elspoint_copyright_text',
        ));

        // default Settings - img, 
        $wp_customize->add_section('default_settings',array(
            'title'=>__('Default Theme Settings','elspointremotework'),
            'description'=> 'You can change all default settings or update from here.',
        ));
        //default not found image
        $wp_customize->add_setting('default_no_img',array(
            'default'=> get_bloginfo('template_directory').'/img/image-not-found.png',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'default_no_img',array(
            'label'=> __('Change Default Image', 'elspointremotework'),
            'description'=>'You can change default image from here.',
            'section'=> 'default_settings',
            'settings'=> 'default_no_img',
        )));
        
        // link, button backgound color
        $wp_customize->add_setting('link_bgc_color',array(
            'default'=>'#a90cf9',
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'link_bgc_color',array(
            'label'=> __('Theme Color', 'elspointremotework'),
            'description'=>'You can change default Link or buttons Background Color from here.',
            'section'=> 'default_settings',
            'settings'=> 'link_bgc_color',
        )));

        // link hover backgound color
        $wp_customize->add_setting('hover_bgc_color',array(
            'default'=>'#262626',
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'hover_bgc_color',array(
            'label'=> __('button hover background Color', 'elspointremotework'),
            'description'=>'You can change default Link or buttons hover Background Color from here.',
            'section'=> 'default_settings',
            'settings'=> 'hover_bgc_color',
        )));

        // Body backgound color
        $wp_customize->add_setting('body_bgc_color',array(
            'default'=>'#ffffff',
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'body_bgc_color',array(
            'label'=> __('Body background Color', 'elspointremotework'),
            'description'=>'You can change default Link or buttons hover Background Color from here.',
            'section'=> 'default_settings',
            'settings'=> 'body_bgc_color',
        )));

        // tags type links  backgound color
        $wp_customize->add_setting('tag_bgc_color',array(
            'default'=>'#000000',
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'tag_bgc_color',array(
            'label'=> __('Tag background Color', 'elspointremotework'),
            'description'=>'You can change default tag Link types or button like tag Background Color from here.',
            'section'=> 'default_settings',
            'settings'=> 'tag_bgc_color',
        )));

        // tags type links hover  backgound color
        $wp_customize->add_setting('hover_tag_bgc_color',array(
            'default'=>'#a90cf9',
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'hover_tag_bgc_color',array(
            'label'=> __('Tag hover background Color', 'elspointremotework'),
            'description'=>'You can change default tag Link types hover or button like tag hover Background Color from here.',
            'section'=> 'default_settings',
            'settings'=> 'hover_tag_bgc_color',
        )));

};

add_action('customize_register','elspoint_customization');


//Theme Color function
function theme_color_customize(){
    ?>
    <style>
        :root{
    --link_bgc_color:<?php echo get_theme_mod('link_bgc_color'); ?>;
    --hover_bgc_color:<?php echo get_theme_mod('hover_bgc_color'); ?>;
    --body_bgc_color:<?php echo get_theme_mod('body_bgc_color'); ?>;
    --text_color:#000000;
    --tag_bgc_color:<?php echo get_theme_mod('tag_bgc_color'); ?>;
    --hover_tag_bgc_color:<?php echo get_theme_mod('hover_tag_bgc_color'); ?>;
}
    </style>
    <?php
}
add_action('wp_head','theme_color_customize');