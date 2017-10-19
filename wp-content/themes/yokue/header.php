<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yokue
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrap">
	<header class="header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Yokue" /></a>
        <span class="header-enjoy">
            <img src="<?php echo get_template_directory_uri();?>/img/sabe_de_vacaiones.png" alt="enjoy" />
        </span>
		

        
        <a href="#" class="btn btn-register">Registrate Ahora!</a>
        <div class="header-phones">
            <span>(506)4700-8420</span>
            <span>(506)2506-3803</span>
            
        </div>
        <button id="btn-menu" class="header-btn-menu">
            <i class="icon-menu"></i>
        </button>
        <div class="clear"></div>
        <?php wp_nav_menu( array(
                         'theme_location' => 'primary',
                         'menu_id' => 'primary-menu',
                         'container'       => 'nav',
                        'container_class' => 'header-menu',
                        'container_id'    => '',
                        'menu_class'      => 'header-menu-ul',
                          ) 
                      ); 
                      ?>
	</header>
	<div class="social">
            <a href="https://www.facebook.com/YokueCR/" class="social-link" target="_blank"><i class="icon-facebook"></i></a>
            <a href="https://twitter.com/yokue_info" class="social-link" target="_blank"><i class="icon-twitter"></i></a>
            <a href="#" class="social-link"><i class="icon-youtube"></i></a>
    </div>


