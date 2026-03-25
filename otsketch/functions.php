<?php
/*
MR Semantic Framework
Core Version: 18th February 2018
*/

// Core
include('inc/core.php');

// Site Specific
include('inc/custom.php');

// Schema Markup
include('inc/schema.php');

add_filter( 'gform_field_value_your_parameter', 'my_custom_population_function' );
function my_custom_population_function( $value ) {
    global $post;
    return function_exists( 'get_field' ) ? get_field( 'file_res', $post->ID ) : false;
}

function wpb_imagelink_setup() {
    $image_set = get_option( 'image_default_link_type' );
     
    if ($image_set !== 'none') {
        update_option('image_default_link_type', 'none');
    }
}
add_action('admin_init', 'wpb_imagelink_setup', 10);