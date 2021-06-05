<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        $parent_style = 'parent-style';
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'advance-fitness-gym-block-style','bootstrap-style' ) );

        wp_enqueue_style('child-style', trailingslashit(get_stylesheet_directory_uri()) . 'css/style.css');
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 100 );

// END ENQUEUE PARENT ACTION



// Custom post type and taxonomy

add_action('init', 'custom_posts');

function custom_posts()
{

    register_taxonomy('branches', array('teachers', 'classes'), array(

        'labels' => array(
            'name' => 'Направления',
            'singular_name' => 'Направление',
        ),

        'public' => true,
        'hierarchical' => true,
        'show_in_rest' => true,
    ));

    register_post_type('teachers', array(

        'labels' => array(
            'name' => 'Преподаватели',
            'singular_name' => 'Преподаватель',
        ),

        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('branches'),
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
        'show_in_rest' => true,
        'rest_base' => 'teachers',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
    ));

    register_post_type('classes', array(

        'labels' => array(
            'name' => 'Классы',
            'singular_name' => 'Класс',
        ),

        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('branches'),
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
        'show_in_rest' => true,
        'rest_base' => 'classes',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
    ));

    register_taxonomy('price', array('price_list'), array(

        'labels' => array(
            'name' => 'Виды занятий по оплате',
            'singular_name' => 'Вид занятий по оплате',
        ),

        'public' => true,
        'hierarchical' => true,
        'show_in_rest' => true,
    ));


    register_post_type('price_list', array(

        'labels' => array(
            'name' => 'Цены',
            'singular_name' => 'Цена',
        ),

        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('price'),
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
        'show_in_rest' => true,
        'rest_base' => 'price_list',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
    ));
}



