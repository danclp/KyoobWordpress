<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kyoob_arc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body id="<?php echo (is_page()) ? get_query_var('name') : ((is_home()) ? "home" : ((is_single()) ? "single": ((is_category()) ? single_cat_title() : ((is_archive()) ? "archive" : "")))); ?>" <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kyoob_arc' ); ?></a>

    <header class="site-header">
        <div class="site-header_wrap">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="brand" src="<?php bloginfo('template_directory') ?>/images/kyoob_logo.svg" alt="Kyoob Architecture"></a>
            <nav id="site-navigation" class="main-navigation">
                <div class="toggleWrap">
                    <div class="toggle">
                        <div class="top"><span></span></div>
                        <div class="center"><span></span></div>
                        <div class="bottom"><span></span></div>
                    </div>
                </div><!-- End of toggleWrap -->
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'main-nav_wrap',
                    'container'      => '',
                ) );
                ?>
            </nav>
        </div>
    </header>

    <div class="pageWrap">
        <div id="content" class="site-content">
