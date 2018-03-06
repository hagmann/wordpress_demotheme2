<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?counter=<?php echo time(); ?>" type="text/css" media="screen" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrapper">

   <div id="header">
   		<div class="container">
	   		<div class="main-logo">
	   				<?php the_custom_logo(); ?>
	   		</div>

	  		<div class="main-navigation">
	  				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
	  		</div>
	  	</div>
   </div><!-- header -->
    
    <div id="content">

    		<div class="container">