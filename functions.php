<?php

/****************
Theme support
****************/
function iskra_theme_support() {
    
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    
    register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'iskra' ),
) );
    
}
add_action('init','iskra_theme_support');

function add_theme_scripts(){
    
    wp_enqueue_style('style.css',get_template_directory_uri() .'/style.css');
    wp_enqueue_script( 'main.js', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.1, true);
}
add_action('wp_enqueue_scripts','add_theme_scripts');


function iskra_register_my_cpts_galerije() {

	/**
	 * Post Type: galerije.
	 */

	$labels = [
		"name" => __( "galerije", "custom-post-type-ui" ),
		"singular_name" => __( "galerija", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "galerije", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "galerije", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "galerije", $args );
}

add_action( 'init', 'iskra_register_my_cpts_galerije' );

/**********************************
  Register Sidebar
***********************************/

function iskra_widget_setup() {
    
    register_sidebar(array(
    
        'name' => 'Footer-1',
        'id' => 'footer-1',
        'before_widget' => '<div class="col-md-4">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
    
     register_sidebar(array(
    
        'name' => 'Footer-2',
        'id' => 'footer-2',
        'before_widget' => '<div class="col-md-4">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
    
    register_sidebar(array(
    
        'name' => 'Footer-3',
        'id' => 'footer-3',
        'before_widget' => '<div class="col-md-4">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
   
   
   
    
}
    
    add_action('widgets_init','iskra_widget_setup');
