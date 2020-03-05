<?php

/* Template Name: Get in Touch */

get_header(); ?>
<section class="banner">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center">
            <h1><?php the_title();?></h1>
        </div>
    </div>
</section>
<section class="map_section">
    <div id="map"></div>
    <div class="overlay-container">
         <div class="grid-container">
            <div class="grid-x grid-margin-x align-center">
                <div class="cell medium-5 medium-offset-7">
                    <div class="box-cont">
                        <p><strong>How can we help?</strong> Have a personal story about how CBD has helped you? A flavor suggestion? Get in touch with us.</p>
                        <?php echo do_shortcode('[contact-form-7 id="68" title="Contact Form"]');?>
                    </div>
                </div>
            </div>
        </div><!--end-->
   </div>
   <div class="popupinfo-cont" id="popupinfo-cont" data-map-pin="<?php echo MBN_ASSETS_URI ?>/img/map-pin-location-toka.png">
       <div class="popupinfo">
            <?php
               echo wp_get_attachment_image(get_field("image"), "full");
            ?>
            <ul>
                <li class="address"><?php the_field("address")?></li>
                <li class="sched"><?php the_field("schedule")?> <span class="store-status">Store is open today</span></li>
                <li class="phone"><?php the_field("phone")?></li>
            </ul>
       </div>
   </div>
</section>
<?php get_footer() ?>