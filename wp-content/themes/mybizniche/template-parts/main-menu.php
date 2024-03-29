
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
                    //'menu_class'        => 'menu vertical',
                    'items_wrap' => '<ul class="vertical menu drilldown" data-drilldown data-auto-height="true" data-animate-height="true" data-parent-link="true">%3$s</ul>' 
                ]);
                ?>
            </div>

            <div class="hide-for-large mob-payment"> 
                <?php get_template_part('template-parts/cards-list') ?>
            </div>

            <?php get_template_part('template-parts/contact-info') ?>
        </div>
    </div>
</div>
<!-- /MAIN MENU -->