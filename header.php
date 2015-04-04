<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package darrenpuscas
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <script src="//use.typekit.net/vts8skf.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'locals-theme' ); ?></a>

    <header id="masthead" class="grid" role="banner">

        <div class="site-header">


                <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>


                <nav id="site-navigation" class="main-navigation" role="navigation">

                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

                </nav><!-- #site-navigation -->


        </div>


        <?php if ( get_header_image() ) : ?>
            <div class="header-image">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
                </a>
            </div>
        <?php endif; // End header image check. ?>

    </header><!-- #masthead -->

    <div id="content" class="site-content">
