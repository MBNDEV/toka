<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php echo bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="<?php echo MBN_ASSETS_URI ?>/img/favicon.ico">
    <!-- <title><?php bloginfo('title') ?></title> -->

    <?php wp_head() ?>

</head>
<body <?php body_class() ?>>
    <?php
        print_r($_GET);
        if(isset($_GET['s'])){
        global $wp_query;
        print_r($wp_query);
        
        }
    ?>

    <div class="preloader"></div>

    <div class="spacer-top"></div>

    <?php get_template_part('template-parts/main-menu') ?>
    <?php get_template_part('template-parts/account-settings') ?>
    <?php get_template_part('template-parts/mini-cart-settings') ?>

    <div id="search-box" data-toggler=".show">
        <form action="<?php bloginfo( "url" )?>" method="get">
            <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search" />
            <input type="image" alt="Search" src="<?php echo MBN_ASSETS_URI ?>/img/icn-search.svg" />
        </form>

        
    </div>

    <!-- WRAPPER -->
    <div id="wrapper" class="wrapper">
    
        <!-- HEADER -->
        <header id="header" class="header">
            <div class="grid-container fluid">
                <div class="grid-x grid-margin-x align-middle">
                    <div class="small-4 large-5 cell left-col">
                        <a href="#main-menu" class="option-menu sidebar-menu-toggle"></a>
                        <a class="s-icon" data-toggle="search-box" aria-expanded="false" data-s=""></a>
                        <div class="sale">
                            <span class="lbl">Ready to Feel Relief?</span>
                            <span class="val"><span class="lbl2">Sign up to receive</span> <strong>10% off</strong> your first order!</span>
                        </div>
                    </div>
                    <div class="small-4 large-2 cell">
                        <a href="<?php echo home_url() ?>" class="logo">
                            <img src="<?php echo MBN_ASSETS_URI ?>/img/logo-toka-box-black.svg" alt="Toka CBD Wellness" />
                        </a>
                    </div>
                    <div class="small-4 large-5 cell right-col">
                        <?php
                        wp_nav_menu([
                            'theme_location'    => 'header-menu',
                            'container'         => false,
                            'menu_class'        => 'm-menu',
                            // 'walker'            => new MBN_Walker_Header_Menu
                        ]);
                        ?>
                        <!-- <ul class="m-menu">
                            <li>
                                <a href="#">Shop</a>
                            </li>
                            <li><a href="#">IV Therapy</a></li>
                            <li><a href="#">Why Toka?</a></li>
                        </ul> -->
                        <ul class="woo-acc">
                            <li><a href="#account-settings" class="acc sidebar-menu-toggle"></a></li>
                            <li>
                                <a href="#mini-cart-settings" class="mini-cart sidebar-menu-toggle">
                                    <span class="item-c">
                                    <span><?php get_template_part('template-parts/shopping-cart-count') ?></span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- /HEADER -->