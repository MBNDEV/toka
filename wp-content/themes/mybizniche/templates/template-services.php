<?php

/* Template Name: Services Page */

the_post();

get_header(); ?>


<section id="sec-masthead" class="sec-masthead section">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell large-12">
                <div class="text-wrap text-center">
                    <h1 data-aos="fade-up"><?php the_title() ?></h1>
                    <p data-aos="fade-up" data-aos-delay="300"><strong><span class="blue">Intravenous (IV) therapy</span></strong> for many different reasons has been popularized over the past few years.<br>
                    Results have been impressive in assisting people to receive specific micro nutrients and vitamins in a safe and efficacious manner. Thus, TOKA is pleased to have IV therapy as a service that can partner with our other medical therapies using TOKA CBD.</p>
                    <a data-aos="fade-down" data-aos-delay="500" href="#ivmenu-options" class="arrow-button margin-top-2" data-smooth-scroll>IV THERAPY MENU</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sec-years" class="sec-years section" data-aos="fade-up" data-aos-delay="600">
    <div class="bg-slider">
        <div class="slide-item"><img src="<?php echo MBN_ASSETS_URI ?>/img/img-service1.jpg" alt=""></div>
        <div class="slide-item"><img src="<?php echo MBN_ASSETS_URI ?>/img/img-service2a.jpg" alt=""></div>
    </div>
    
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell large-5">
                <div class="text-wrap text-wrap-1"  data-aos="fade" data-aos-offset="300">
                    <h2><span class="blue">100+</span> Years</h2>
                    <h4>Combined Medical Experience</h4>
                    <p>TOKA is supported with several different physicians and nurses who have a combined medical experience of over 100 years. Thus, the TOKA staff has the ability to help most people with any type of malady.</p>
                    <a href="#ivmenu-options" class="arrow-button margin-top-2" data-smooth-scroll>IV THERAPY MENU</a>
                </div>
            </div>
            <div class="cell large-12">
                <div class="text-wrap text-wrap-2"  data-aos="fade" data-aos-offset="300">
                    <p>TOKA was created to help people in need of supporting a quality life using various IV drips with appropriate CBD when desired or needed. <span class="white">CBD has been shown to be very effective and supportive of many different problems including help with pain relief, relaxation, boosting of immunity, sleep and several other issues.</span></p>

                    <p><span class="blue">IV therapy</span> can be used for hydration only or it can be utilized for the administration of micronutrients to assist in boosting immunity. IV therapy should never be used for the replacement of prescription medications.</p>
                </div>

                <div class="ivmenu-options" id="ivmenu-options">
                    <h3 class="title" data-aos="fade-right" data-aos-offset="300">IV Menu Options:</h3>

                    <?php
                    $items = array_chunk(get_posts('post_type=ivtherapy&posts_per_page=-1&order=asc'), 2);

                    foreach($items as $item):
                    ?>
                    <div class="grid-x grid-margin-x align-justify">
                        <?php foreach($item as $k => $i): ?>
                        <div class="cell large-5">
                            <?php
                            $colorId        = 'color-'.$i->ID;
                            $color          = get_field('color', $i->ID);
                            $color1         = $color['color'];
                            $color2         = $color['color_2'];;
                            $is_gradient    = $color['use_gradient'];
                            ?>
                            <style>
                            <?php echo '#ivmenu-item-'.$i->ID.' .heading:after' ?>{
                                border-color: <?php echo $color1 ?>;
                            }
                            <?php echo '#ivmenu-item-'.$i->ID.' .heading .text strong' ?>{
                                color:<?php echo $color1 ?$color1 :'#fff' ?>;
                                <?php if($is_gradient): ?>
                                background: -webkit-linear-gradient(<?php echo $color2.', '.$color1 ?>);
                                -webkit-background-clip: text;
                                -webkit-text-fill-color: transparent;
                                <?php endif ?>
                            }
                            </style>

                            <!-- ITEM -->
                            <div id="ivmenu-item-<?php echo $i->ID ?>" class="ivmenu-item <?php echo ($k==0) ?'left-side' :'right-side' ?>" data-aos="fade" data-aos-offset="300">
                                <div class="heading">
                                    <span class="icon" data-aos="fade-up" data-aos-offset="300" data-aos-delay="">
                                        <?php include(locate_template('template-parts/ivtherapy-icon.php', false, false)) ?>
                                    </span>
                                    <span class="text" data-aos="fade-left" data-aos-offset="300" data-aos-delay="300">
                                        <img src="<?php echo MBN_ASSETS_URI ?>/img/icn-toka-label.svg" alt=""><br>
                                        <strong><?php echo $i->post_title ?></strong>
                                    </span>
                                </div>
                                <ul class="metas">
                                    <li data-aos="fade-down" data-aos-offset="200" data-aos-delay="300">IV Therapy</li>
                                    <li data-aos="fade-down" data-aos-offset="200" data-aos-delay="300">
                                        <span class="price-tag">
                                            <?php
                                            $price  = get_field('price', $i->ID);
                                            $off    = get_field('off-price', $i->ID);
                                            $price2 = $price - (($off/100) * $price);

                                            if($off){
                                                printf('<u><sup>%s</sup>%0.2f</u><sup>%s</sup>%0.2f <span class="badge">%s%% off</span>',
                                                    get_woocommerce_currency_symbol(),
                                                    $price,
                                                    get_woocommerce_currency_symbol(),
                                                    $price2,
                                                    $off
                                                );
                                            }else{
                                                printf('<sup>%s</sup>%0.2f', $price);
                                            }
                                            ?>
                                        </span>
                                    </li>
                                </ul>
                                <div class="content" data-aos="fade" data-aos-offset="200" data-aos-delay="300">
                                    <p class="min-hcontent"><?php echo $i->post_content; ?></p>
                                    <p class="medium-text-center-down"><a href="/contact/" class="arrow-button">Select and Book Now</a></p>
                                </div>
                            </div>
                            <!-- /ITEM -->

                        </div>
                        <?php endforeach ?>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
.sec-faq{ background-color: #222 }
.sec-faq .section-title{ color: #fff }
</style>

<?php // get_template_part('template-parts/section-faqs') ?>


<?php get_footer() ?>