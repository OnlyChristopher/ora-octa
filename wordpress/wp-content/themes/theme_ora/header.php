<?php
global $xs_container_class;
global $xs_container_fluid_class;
//global $xs_img_destacada;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php bloginfo('name'); ?><?php echo wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/image/favicon.png?xs=sd">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    </head>
    <body class="xs_wordpress">
        <header class="xs_header_div">
          <nav id="nav" class="xs_nav_div">
                <div id="logo-fixed"></div>
                <div class="<?php echo $xs_container_class; ?>">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="xs_navbar_div">
                                <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'menu_principal_ora',
                                        'container_id' => 'xs_navbar',
                                        'container_class' => 'xs_menu_horizontal',
                                        'menu_class' => 'nav menu'
                                        ));

                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <nav class="xs_nav2_div">
                <div class="<?php echo $xs_container_class; ?>">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="xs_navbar2_div" >
                            </div>
                        </div>
                    </div>
                </div>
            </nav>


            <?php if(is_active_sidebar( 'xs_top4' )): ?>
            <div class="xs_top4_div">
	            <?php dynamic_sidebar('xs_top4'); ?>
            </div>
            <?php endif; ?>

        </header>
        <?php
        //$xs_img_destacada_arr = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
        //$xs_img_destacada = (!empty($xs_img_destacada_arr[0])) ? $xs_img_destacada_arr[0]: "";
        get_template_part( 'sections/content', 'slide' );
