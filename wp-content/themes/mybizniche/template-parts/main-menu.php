
<!-- MAIN MENU -->
<div id="main-menu" class="main-menu sidebar-menu-wrap">
    <div class="sidebar-menu">
        <div class="inner with-scrollbar">
            <ul class="top">
                <li><button class="close">close</button></li>
            </ul>

            <div class="header-nav">
                <?php
                wp_nav_menu([
                    'theme_location'    => 'main-menu',
                    'container'         => false,
                    'menu_class'        => 'menu vertical',
                ]);
                ?>
                <!-- <ul class="menu vertical">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">IV Therapy</a></li>
                    <li><a href="#">Why Toka?</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Find a Store</a></li>
                    <li><a href="#">Contact</a></li>
                </ul> -->
            </div>

            <?php get_template_part('template-parts/contact-info') ?>
        </div>
    </div>
</div>
<!-- /MAIN MENU -->