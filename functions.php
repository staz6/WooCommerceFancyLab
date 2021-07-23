<?php
/**
 * The functions file
 *
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FancyLab

 */

function fancy_lab_scripts(){
	wp_enqueue_script('bootstrap-js', get_template_directory_uri(). '/inc/bootstrap.min.js',array('jquery'),'5.0.2',true);
	wp_enqueue_style('bootstrap-css',get_template_directory_uri() . '/inc/bootstrap.min.css',array(),'5.0.2','all');
	wp_enqueue_style( 'fancy-lab-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css'), 'all');
}
add_action( 'wp_enqueue_scripts' ,'fancy_lab_scripts');

function fancy_lab_config(){
	register_nav_menus(
		array(
			'fancy_lab_main_menu' => "Fancy Lab Main Menu"
		)
	);

}
add_action( 'after_setup_theme', 'fancy_lab_config', 0);

function admin_bar(){

  if(is_user_logged_in()){
    add_filter( 'show_admin_bar', '__return_true' , 1000 );
  }
}
add_action('init', 'admin_bar' );
