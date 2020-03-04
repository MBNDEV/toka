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

    <div class="preloader"></div>

    <div class="spacer-top"></div>

    <!-- WRAPPER -->
    <div id="wrapper" class="wrapper">

        <!-- HEADER -->
        <header id="header" class="header">
            <div class="grid-container fluid">
                <div class="grid-x grid-margin-x align-middle">
                    <div class="small-4 large-5 cell left-col">
                        <a class="option-menu"></a>
                        <a class="s-icon"></a>
                        <div class="sale">
                            <span class="lbl">Ready to Feel Relief?</span>
                            <span class="val"><span class="lbl2">Sign up to receive</span> <strong>10% off</strong> your first order!</span>
                        </div>
                    </div>
                    <div class="small-4 large-2 cell">
                        <a href="#" class="logo">
                            <img src="<?php echo MBN_ASSETS_URI ?>/img/logo-toka-box-black.svg" alt="Toka CBD Wellness" />
                        </a>
                    </div>
                    <div class="small-4 large-5 cell right-col">
                        <ul class="m-menu">
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">IV Therapy</a></li>
                            <li><a href="#">Why Toka?</a></li>
                        </ul>
                        <ul class="woo-acc">
                            <li><a href="#" class="acc"></a></li>
                            <li>
                                <a href="#" class="mini-cart">
                                    <span class="item-c">
                                    <span>5</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- /HEADER -->