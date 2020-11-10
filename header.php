<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory');?>/images/favicon.png">

    <!-- Analytics goes here -->

	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body id="site" <?php body_class(); ?>>
    <div class="head-wrapper">
        <div class="container-fluid">
            <div class="row flex-container">
                <div class="logo-container">
                    <a href="<?php bloginfo('url'); ?>">
                        <span class="logo-title">JSA <span class="tex-italic">Theme</span></span>
                    </a>
                </div><!-- .logo-container -->

                <div class="main-nav">
                    <?php wp_nav_menu(array( 'theme_location' => 'main_menu' )); ?>
                </div><!--.main-nav-->

            </div><!--.row-->
        </div><!--.container-fluid-->
    </div><!--.head-wrapper-->