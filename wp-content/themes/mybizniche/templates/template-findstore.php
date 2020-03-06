<?php

/* Template Name: Find Store */

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
        <div class="grid-x grid-margin-x">
            <div class="cell large-4">
                <div class="txt-cont">
                    <input type="text" name="q" placeholder="Search Store Here"/>
                </div>
            </div><!--end-->
        </div><!--end-->
    </div><!--end-->

  </div><!--end of overlay-container-->
   <div class="popupinfo-cont" id="popupinfo-cont" data-map-pin="<?php echo MBN_ASSETS_URI ?>/img/map-pin-location-toka.png">
       <div class="popupinfo">

            <ul>
                <li class="address"></li>
                <li class="sched"><span class="val"></span> <span class="store-status">Store is open today</span></li>
                <li class="phone"></li>
            </ul>
       </div><!--end-->
   </div><!--end-->
   
</section>
<section class="map_result">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell large-12">
                <div class="items">
                    
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>