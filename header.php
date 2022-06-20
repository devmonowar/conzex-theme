<?php global $conzex_option; 

/**
 * Header file
 *
 * @package Conzex
 */

?>

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/favicon.png" type="image/x-icon" />
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>


        <!--==================================================================== 
                            Start header area
    =====================================================================-->

        <header class="main-header">

            <!--Header-Upper-->
            <div class="header-upper">
                <div class="container clearfix">

                    <div class="header-inner clearfix d-lg-flex">
                        <div class="logo-outer">
                            <div class="logo">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $conzex_option['header_logo']['url']; ?>" alt="" title=""></a>
                            </div>

                            <div class="fixed-logo">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $conzex_option['header_sticky_logo']['url']; ?>" alt="" title=""></a>
                            </div>
                        </div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md ml-md-auto">
                            <div class="navbar-header clearfix">

                                <div class="logo">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $conzex_option['header_logo']['url']; ?>" alt="" title=""></a>
                                </div>

                                <div class="fixed-logo">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $conzex_option['header_sticky_logo']['url']; ?>" alt="" title=""></a>
                                </div>

                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-one">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse navbar-collapse-one collapse clearfix">
                                
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'top',
                                        'menu_id'        => 'top-menu',
                                        'menu_class'        => 'navigation clearfix',
                                        'fallback_cb' => 'default_top_menu_fallback',
                                        //'theme_location' => is_user_logged_in() ? 'top-menu' : 'logged-out-menu'
                                    )
                                );

                                function default_top_menu_fallback() {
                                    $default = is_user_logged_in() ? '<a href="/conzex/wp-admin/nav-menus.php">Set Top Menu</a>' : '<a href="/conzex">Home</a>'

                                  ?>
                                  <ul class="navigation">
                                    <li><?php echo $default; ?></li>
                                </ul>
                                  <?php
                                }
                                    
                                ?>

                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Menu buttons-->
                        <div class="sup-log">
                            <?php  if ($conzex_option['btn_1_text']) : ?>
                                <a class="support" href="<?php echo $conzex_option['btn_1_url']; ?>"><?php echo $conzex_option['btn_1_text']; ?></a>
                           <?php endif; ?>
                            
                            <?php  if ($conzex_option['btn_2_text']) : ?>
                            <a class="login" href="<?php echo $conzex_option['btn_2_url']; ?>"><?php echo $conzex_option['btn_2_text']; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Header Upper-->

        </header>

        <!--==================================================================== 
                            End header area
    =====================================================================-->
	
    <?php

    if(!is_front_page()){
        get_template_part( 'template-parts/breadcumb' );
    }


