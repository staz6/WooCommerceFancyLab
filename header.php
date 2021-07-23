<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FancyLab

 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<section class="header">
	<div class="container">
	<div class="row">
		 <div class="col-md-2">
		 	Header
		 </div>
		 <div class="nav col-md-10">
		 	<?php
		 		wp_nav_menu(
		 			array(
		 				'theme_location' => 'fancy_lab_main_menu'
		 			)
		 		) 
		 	?>
		 </div>
	</div>
</div>
</section>


<body>