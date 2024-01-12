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

        // About section
        $wp_customize->add_section('elspoint_about_section_area', array(
            'title'=>__('About Us Area','elspointremotework'),
            'description'=> 'You can update or change short information about your company from here.',
        ));
    
        $wp_customize->add_setting('elspoint_about_img',array(
            'default'=> get_bloginfo('template_directory').'/img/work_from_home_hire.jpg',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',

        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'elspoint_about_img',array(
            'label'=> __('Change Image', 'elspointremotework'),
            'description'=>'You can change your about us  image from here.',
            'section'=> 'elspoint_about_section_area',
            'settings'=> 'elspoint_about_img',
        )));
        $wp_customize->add_setting('elspoint_about_1st_text',array(
            'default'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus distinctio, facere ab illo perferendis ipsum quisquam, deserunt soluta eos, iure non magnam? Obcaecati, iusto debitis.',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
        ));
    
        $wp_customize->add_control('elspoint_about_1st_text',array(
            'label'=> __('Update 1st Paragraph', 'elspointremotework'),
            'description'=>'You can update about section 1st paragraph from here.',
            'section'=> 'elspoint_about_section_area',
            'settings'=> 'elspoint_about_1st_text',
            'type'=> 'textarea'
        ));
        $wp_customize->add_setting('elspoint_about_2nd_text',array(
            'default'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus distinctio, facere ab illo perferendis ipsum quisquam, deserunt soluta eos, iure non magnam? Obcaecati, iusto debitis.',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
        ));
    
        $wp_customize->add_control('elspoint_about_2nd_text',array(
            'label'=> __('Update 2nd Paragraph', 'elspointremotework'),
            'description'=>'You can update about section 2nd paragraph from here.',
            'section'=> 'elspoint_about_section_area',
            'settings'=> 'elspoint_about_2nd_text',
            'type'=> 'textarea',
            
        ));

        //Top Section / Home section
        $wp_customize->add_section('elspoint_top_section_area', array(
            'title'=> __('Top Section Settings','elspointremotework'),
            'description'=>'You can change anything on top section',

        ));
        $wp_customize->add_setting('elspoint_top_section_bg_img',array(
            'default'=> get_bloginfo('template_directory').'/img/background-image-with-girl.png',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'elspoint_top_section_bg_img',array(
            'label'=> __('Change Image', 'elspointremotework'),
            'description'=>'You can change your top section background featured image from here.',
            'section'=> 'elspoint_top_section_area',
            'settings'=> 'elspoint_top_section_bg_img',
        )));

        $wp_customize->add_setting('elspoint_top_section_title',array(
            'default'=> 'Setup your home office',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
        ));
        $wp_customize->add_control('elspoint_top_section_title',array(
            'label'=>__('Update Title','elspointremotework'),
            'description'=>'you can update title text from here',
            'section'=>'elspoint_top_section_area',
            'settings'=>'elspoint_top_section_title',
            
        ));
        $wp_customize->add_setting('elspoint_top_section_small_text',array(
            'default'=> 'Remote work is working style that alwows professionals to work outside of a tradisional office.',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
        ));
        $wp_customize->add_control('elspoint_top_section_small_text',array(
            'label'=>__('Update Short Description','elspointremotework'),
            'description'=>'you can update short description from here',
            'section'=>'elspoint_top_section_area',
            'settings'=>'elspoint_top_section_small_text',
            'type'=>'textarea',
        ));
        $wp_customize->add_setting('elspoint_top_section_btn_text',array(
            'default'=> 'Learn More',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
        ));
        $wp_customize->add_control('elspoint_top_section_btn_text',array(
            'label'=>__('Update Button Text','elspointremotework'),
            'description'=>'you can update your top section learn more button text from here',
            'section'=>'elspoint_top_section_area',
            'settings'=>'elspoint_top_section_btn_text',
            
        ));
        $wp_customize->add_setting('elspoint_top_section_btn_link',array(
            'default'=> '#',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
        ));
        $wp_customize->add_control('elspoint_top_section_btn_link',array(
            'label'=>__('Update Button Text','elspointremotework'),
            'description'=>'you can update your top section learn more button text from here',
            'section'=>'elspoint_top_section_area',
            'settings'=>'elspoint_top_section_btn_link',
            'type'=>'dropdown-pages',
            
        ));

        //Second Section settings
        $wp_customize->add_section('second_section_area',array(
            'title'=>__('Second Featured Section Settings','elspointremotework'),
            'description'=>'You can update or change on second section',
        ));
        $wp_customize->add_setting('second_section_title',array(
            'default'=>'Latest Remote Work',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
        ));
        $wp_customize->add_control('second_section_title',array(
            'label'=>'Section Title',
            'description'=>'You can update second section title from here',
            'section'=>'second_section_area',
            'settings'=>'second_section_title',
        ));
        $wp_customize->add_setting('second_section_description',array(
            'default'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed nisi ea quos perferendis odit tempora est!',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
        ));
        $wp_customize->add_control('second_section_description',array(
            'label'=>'Section Description',
            'description'=>'You can update second section description from here',
            'section'=>'second_section_area',
            'settings'=>'second_section_description',
            'type'=>'textarea',
        ));
        $wp_customize->add_setting('second_section_featured_post',array(
            'default'=>'',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
        ));
        $wp_customize->add_control('second_section_featured_post', array(
            'label' => 'Featured Post from Category ',
            'description' => 'Featured Post from Category ',
            'section'    => 'second_section_area',
            'settings' => 'second_section_featured_post',
            'type' => 'select',
            // 'type'        => 'checkbox',
            'choices' => get_categories_select(),
        ));

        $wp_customize->add_setting('second_section_featured_post_number',array(
            'default'=>'10',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',

        ));

        $wp_customize->add_control('second_section_featured_post_number',array(
            'label'=>'Number of Display Post',
            'description'=>'you can choose to display how much featured post you want to show in this section',
            'section'=>'second_section_area',
            'settings'=>'second_section_featured_post_number',
            'type'=>'select',
            'choices'=>array(
                '1'=>'1',
                '2'=>'2',
                '3'=>'3',
                '5'=>'5',
                '10'=>'10',
                '15'=>'15',
                '20'=>'20',
                '25'=>'25',
                '30'=>'30',
                '50'=>'50',
                '100'=>'100',
                '200'=>'200',
            ),
        ));
        

        //third featured post Section settings
        $wp_customize->add_section('third_section_area',array(
            'title'=>__('Third Featured Section Settings','elspointremotework'),
            'description'=>'You can update or change on third section',
        ));
        $wp_customize->add_setting('third_section_title',array(
            'default'=>'Get Jobs',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
        ));
        $wp_customize->add_control('third_section_title',array(
            'label'=>'Section Title',
            'description'=>'You can update third section title from here',
            'section'=>'third_section_area',
            'settings'=>'third_section_title',
        ));
        $wp_customize->add_setting('third_section_description',array(
            'default'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed nisi ea quos perferendis odit tempora est!',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
        ));
        $wp_customize->add_control('third_section_description',array(
            'label'=>'Section Description',
            'description'=>'You can update third section description from here',
            'section'=>'third_section_area',
            'settings'=>'third_section_description',
            'type'=>'textarea',
        ));
        $wp_customize->add_setting('third_section_featured_post',array(
            'default'=>'',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
        ));
        $wp_customize->add_control('third_section_featured_post', array(
            'label' => 'Featured Post from Category ',
            'description' => 'Featured Post from Category ',
            'section'    => 'third_section_area',
            'settings' => 'third_section_featured_post',
            'type' => 'select',
            // 'type'        => 'checkbox',
            'choices' => get_categories_select(),
        ));

        $wp_customize->add_setting('third_section_featured_post_number',array(
            'default'=>'10',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',

        ));

        $wp_customize->add_control('third_section_featured_post_number',array(
            'label'=>'Number of Display Post',
            'description'=>'you can choose to display how much featured post you want to show in this section',
            'section'=>'third_section_area',
            'settings'=>'third_section_featured_post_number',
            'type'=>'select',
            'choices'=>array(
                '1'=>'1',
                '2'=>'2',
                '3'=>'3',
                '5'=>'5',
                '10'=>'10',
                '15'=>'15',
                '20'=>'20',
                '25'=>'25',
                '30'=>'30',
                '50'=>'50',
                '100'=>'100',
                '200'=>'200',
            ),
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
};

add_action('customize_register','elspoint_customization');
