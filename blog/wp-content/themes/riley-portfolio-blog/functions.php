<?php 

function wpbootstrap_scripts_with_jquery()
{
    // wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array( 'jquery' ) );
    // wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js' );	
	// wp_register_script( 'custom-script', get_template_directory_uri() . '/js/main.js' );
	
    // wp_enqueue_script( 'jquery' );
    // wp_enqueue_script( 'bootstrap' );
    // wp_enqueue_script( 'custom-script' );
}
add_action('wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery');

if (!defined($THEME_IMG_PATH)) {
    define('THEME_IMG_PATH', get_stylesheet_directory_uri() . '/img');
}
function wpb_theme_setup()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'wpb_theme_setup');






@ini_set('upload_max_size', '64M');
@ini_set('post_max_size', '64M');
@ini_set('max_execution_time', '300');
?>