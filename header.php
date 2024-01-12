<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header_area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    
                    <a href="#">
                        <div id="logo"> <img src="<?php echo get_theme_mod('elspoint_logo'); ?>" alt="Logo"></div>
                       
                    </a>
                </div>
                <div class="col-md-9">
                    <nav id="nav">
                    <?php wp_nav_menu(array('theme_location' => 'main_menu'));  ?>
                    </nav>

                </div>
            </div>
        </div>

    </header>