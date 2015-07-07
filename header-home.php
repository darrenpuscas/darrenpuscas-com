<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package darrenpuscas
 */
?><!DOCTYPE html>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'locals-theme' ); ?></a>

    <header id="masthead" class="grid head" role="banner">


                <nav id="site-navigation" class="main-navigation text-content-area" role="navigation">

                    <header class="home-header"><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></header>

                </nav><!-- #site-navigation -->



    </header><!-- #masthead -->

    <div id="content" class="site-content">
