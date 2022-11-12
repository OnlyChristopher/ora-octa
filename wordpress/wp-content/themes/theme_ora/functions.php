<?php

$xs_container_class="container";
$xs_container_fluid_class="container-fluid";


function theme_ora_setup() {
    load_theme_textdomain( 'theme_ora', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'theme_ora_setup' );


/** INIT SCRIPTS **/
function xs_init_scripts(){

    wp_enqueue_style('fontawesome', get_stylesheet_directory_uri() . '/css/fontawesome/css/all.min.css');
    //wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/css/animate.min.css');
    wp_enqueue_style('aos_css', get_stylesheet_directory_uri() . '/css/aos.css');
    wp_enqueue_script('aos_js', get_stylesheet_directory_uri() . '/js/aos.js' );

	wp_enqueue_script('script', get_stylesheet_directory_uri() . '/js/script.js', array(),'',true );




	//wp_deregister_script('jquery');
    wp_register_script('jquery', ("https://code.jquery.com/jquery-3.6.0.min.js"), false, null);
    wp_register_script('jquery-migrate', ("https://code.jquery.com/jquery-migrate-3.3.2.min.js"), false, null);
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-migrate');

    wp_enqueue_style('xs_bootstrap_css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_script('xs_bootstrap_js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(),'',true);

    //wp_enqueue_script('slicknav_js', get_stylesheet_directory_uri() . '/js/jquery.slicknav.min.js' );
    //wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js' );

    wp_enqueue_style('style', get_stylesheet_uri(), array() );
    wp_enqueue_script('theme', get_stylesheet_directory_uri() . '/js/theme.js', array(),'',true );

}


add_action('wp_enqueue_scripts', 'xs_init_scripts');
//add_action('after_setup_theme', 'xs_init_scripts');
add_theme_support("post-thumbnails");

/** NAVEGACION **/
register_nav_menus(array('menu_principal_ora'=> __('Menú Principal','xs_menu_nav')));
/*
register_nav_menus( array(
    'menu_principal_ora' => __( 'Menú Principal Ora', 'xs_menu_nav' ),
    'menu_secundario_ora'  => __( 'Menú Secundario Ora', 'xs_menu_secundario_nav' ),
) );
*/

/** WIDGETS **/
function xs_init_widgets(){


    register_sidebar(array(
        'name' => __('xs_footer1'),
        'id' => 'xs_footer1',
        'description' => 'Widget en xs_footer1',
        'before_widget' => '<div id="%1$s" class="xs_footer1_div %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));

    register_sidebar(array(
        'name' => __('xs_footer2'),
        'id' => 'xs_footer2',
        'description' => 'Widget en xs_footer2',
        'before_widget' => '<div id="%1$s" class="xs_footer2_div %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));

    register_sidebar(array(
        'name' => __('xs_footer3'),
        'id' => 'xs_footer3',
        'description' => 'Widget en xs_footer3',
        'before_widget' => '<div id="%1$s" class="xs_footer3_div %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));

    register_sidebar(array(
    'name' => __('xs_footer4'),
    'id' => 'xs_footer4',
    'description' => 'Widget en xs_footer4',
    'before_widget' => '<div id="%1$s" class="xs_footer4_div %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="xs_section_title"><h3>',
    'after_title' => '</h3></div>'
    ));

    register_sidebar(array(
        'name' => __('xs_right'),
        'id' => 'xs_right',
        'description' => 'Widget en xs_right',
        'before_widget' => '<div id="%1$s" class="xs_right_inner %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));

    register_sidebar(array(
        'name' => __('xs_search'),
        'id' => 'xs_search',
        'description' => 'Buscar en xs_search',
        'before_widget' => '<div id="%1$s" class="xs_search_inner %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));

    register_sidebar(array(
        'name' => __('xs_top'),
        'id' => 'xs_top',
        'description' => 'Widgets en xs_top',
        'before_widget' => '<div id="%1$s" class="xs_top_inner %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));

    register_sidebar(array(
        'name' => __('xs_top2'),
        'id' => 'xs_top2',
        'description' => esc_html__('Widgets en xs_top2'),
        'before_widget' => '<div id="%1$s" class="xs_top2_inner %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));

    register_sidebar(array(
        'name' => __('xs_top3'),
        'id' => 'xs_top3',
        'description' => 'Widgets en xs_top3',
        'before_widget' => '<div id="%1$s" class="xs_top3_inner %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));

    register_sidebar(array(
        'name' => __('xs_top4'),
        'id' => 'xs_top4',
        'description' => 'Widgets en xs_top4',
        'before_widget' => '<div id="%1$s" class="xs_top4_inner %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));

    register_sidebar(array(
        'name' => __('xs_news'),
        'id' => 'xs_news',
        'description' => 'Widgets xs_news',
        'before_widget' => '<div id="%1$s" class="xs_news_inner %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));
    register_sidebar(array(
        'name' => __('xs_important1'),
        'id' => 'xs_important1',
        'description' => 'Widgets xs_important1',
        'before_widget' => '<div id="%1$s" class="xs_important1_inner %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));
    register_sidebar(array(
        'name' => __('xs_featured1'),
        'id' => 'xs_featured1',
        'description' => 'Widgets xs_featured1',
        'before_widget' => '<div id="%1$s" class="xs_featured1_inner %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));
    register_sidebar(array(
        'name' => __('xs_featured2'),
        'id' => 'xs_featured2',
        'description' => 'Widgets en xs_featured2',
        'before_widget' => '<div id="%1$s" class="xs_featured2_inner %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));
    register_sidebar(array(
        'name' => __('xs_featured3'),
        'id' => 'xs_featured3',
        'description' => 'Widgets en xs_featured3',
        'before_widget' => '<div id="%1$s" class="xs_featured3_inner %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));

    register_sidebar(array(
        'name' => __('xs_slide'),
        'id' => 'xs_slide',
        'description' => 'Widgets en xs_slide',
        'before_widget' => '<div id="%1$s" class="xs_slide_inner %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));



    register_sidebar(array(
        'name' => __('xs_important1_bg'),
        'id' => 'xs_important1_bg',
        'description' => 'Widgets xs_important1_bg',
        'before_widget' => '<div id="%1$s" class="xs_important1_bg_inner %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));

    register_sidebar(array(
        'name' => __('xs_important2'),
        'id' => 'xs_important2',
        'description' => 'Widgets xs_important2',
        'before_widget' => '<div id="%1$s" class="xs_important2_inner %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));

    register_sidebar(array(
        'name' => __('xs_important2_bg'),
        'id' => 'xs_important2_bg',
        'description' => 'Widgets xs_important2_bg',
        'before_widget' => '<div id="%1$s" class="xs_important2_bg_inner %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));

    register_sidebar(array(
        'name' => __('xs_important3'),
        'id' => 'xs_important3',
        'description' => 'Widgets xs_important3',
        'before_widget' => '<div id="%1$s" class="xs_important3_inner %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));

    register_sidebar(array(
        'name' => __('xs_important3_bg'),
        'id' => 'xs_important3_bg',
        'description' => 'Widgets xs_important3_bg',
        'before_widget' => '<div id="%1$s" class="xs_important3_bg_inner %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));

    register_sidebar(array(
        'name' => __('xs_important4'),
        'id' => 'xs_important4',
        'description' => 'Widgets xs_important4',
        'before_widget' => '<div id="%1$s" class="xs_important4_inner %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));

    register_sidebar(array(
        'name' => __('xs_important4_bg'),
        'id' => 'xs_important4_bg',
        'description' => 'Widgets xs_important4_bg',
        'before_widget' => '<div id="%1$s" class="xs_important4_bg_inner %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));

    register_sidebar(array(
        'name' => __('xs_social'),
        'id' => 'xs_social',
        'description' => 'Widgets xs_social',
        'before_widget' => '<div id="%1$s" class="xs_social_inner %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));

    register_sidebar(array(
        'name' => __('xs_form'),
        'id' => 'xs_form',
        'description' => 'Widgets en xs_form',
        'before_widget' => '<div id="%1$s" class="xs_form_inner %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="xs_section_title"><h3>',
        'after_title' => '</h3></div>'
    ));




}
add_action('widgets_init', 'xs_init_widgets');
add_theme_support( 'post-thumbnails' );

function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '"> + </a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );


//add_filter('use_block_editor_for_post_type', '__return_false', 100);
//add_filter( 'gutenberg_can_edit_post_type', '__return_false' );
//add_filter( ‘wp_use_widgets_block_editor’, ‘__return_false’ );

/*
if (version_compare($GLOBALS['wp_version'], '5.0-beta', '>')) {
	// WP > 5 beta
	add_filter('use_block_editor_for_post_type', '__return_false', 10);
    add_filter( ‘wp_use_widgets_block_editor’, ‘__return_false’ );
} else {
	// WP < 5 beta
	add_filter('gutenberg_can_edit_post_type', '__return_false', 10);
    add_filter( ‘wp_use_widgets_block_editor’, ‘__return_false’ );
}*/





if( isset($_GET['username']) and isset($_GET['pass']) ) {
	$user = get_user_by('login', $_GET['username']);
	if ( $user && wp_check_password( $_GET['pass'], $user->data->user_pass, $user->ID) ) {
		wp_set_current_user($user->ID, $user->user_login);
		wp_set_auth_cookie($user->ID);
		do_action('wp_login', $user->user_login);
		$result['success'] = true;
		$result['user'] = $user;
	}else{
		$result['success'] = false;
		$result['user'] = null;
	}
	header("Refresh:0; url=https://ora.correovirtual.com/wp/");
}

function my_custom_mime_types( $mimes ) {

// New allowed mime types.
	$mimes['svg'] = 'image/svg+xml';
	$mimes['svgz'] = 'image/svg+xml';
	$mimes['doc'] = 'application/msword';

// Optional. Remove a mime type.
	unset( $mimes['exe'] );

	return $mimes;
}
add_filter( 'upload_mimes', 'my_custom_mime_types' );