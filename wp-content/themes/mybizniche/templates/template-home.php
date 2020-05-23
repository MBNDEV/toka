<?php

/* Template Name: Home Page */

get_header(); ?>


<!-- BANNER -->
<section class="sec-banner section">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center">
            <div class="large-12 cell">
                <div class="text-wrap text-center">
                    <h1 data-aos="fade-up" data-aos-delay="">Your journey to<br /> wellness starts with</h1>
                    
                    <img  data-aos="fade-down" data-aos-delay="" src="<?php echo MBN_ASSETS_URI ?>/img/word-toka.svg" alt="TOKA" class="toka" />

                    <h2 data-aos="fade-up" data-aos-delay="300">Positively <span class="blue">Pure Wellness.</span></h2>
                    <p data-aos="fade-up" data-aos-delay="500">Developed with pharmaceutical science. Rooted in functional medicine.</p>
                </div>
                <div class="p-tabs-wrap" data-aos="fade-up" data-aos-delay="700">
                <?php
                $types      = ['cbd-oil-tinctures', 'cbd-gummies', 'cbd-pre-rolls'];
                //$types      = ['tinctures', 'gummies', 'pre-rolls'];
                $categories = [];

                foreach($types as $type){
                    if($term = get_term_by('slug', $type, 'product_cat')){
                        $categories[] = $term;
                    }
                }
                ?>
                
                <div class="p-tabs">
                    <ul>
                        <?php foreach($categories as $key => $category): ?>
                        <li class="<?php echo $key==0 ?'active' :'' ?>">
                            <a href="#p-tabs-<?php echo $category->slug ?>"><?php echo $category->name ?></a>
                        </li>
                        <?php endforeach ?>
                        <!-- <li class="active">Tinctures</li>
                        <li>Gummies</li>
                        <li>Pre-Rolls</li> -->
                    </ul>
                    <a href="<?php echo home_url('/products/') ?>" class="more">More</a>
                </div>

                <div class="p-tab-cont">
                    <?php foreach($categories as $key => $category): ?>
                    <div class="tab-item <?php echo $key==0 ?'in' :'' ?>" id="p-tabs-<?php echo $category->slug ?>">
                        <?php
                        $items = wc_get_products([
                            'limit'     => 6,
                            'category'  => [$category->slug]
                        ]);

                        if(!empty($items)):
                        ?>
                        <div class="items">
                            <?php foreach($items as $item): ?>
                            <div class="item">
                                <div class="thumb">
                                    <?php echo get_the_post_thumbnail($item->get_id()) ?>
                                </div>

                                <div class="product-info content">
                                    <h3><span style="color:<?php echo get_field('color', $item->get_id()) ?>"><?php echo $item->get_name() ?></span></h3>
                                    <h6>TINCTURE</h6>
                                    <ul class="menu sizes hide">
                                        <li class="active"><a href="#"><strong>3000</strong>mg</a></li>
                                        <li><a href="#"><strong>2000</strong>mg</a></li>
                                    </ul>
                                    <span class="price">
                                        <sup><?php echo get_woocommerce_currency_symbol() ?></sup> <?php echo $item->get_price() ?>
                                    </span>
                                    <ul class="menu actions">
                                        <li><a href="<?php echo esc_url($item->add_to_cart_url()) ?>" class="button add-to-cart"><span class="icon-shopping-bag"></span> ADD TO BAG</a></li>
                                        <li><a href="#" class="button yith-wcqv-button" data-product_id="<?php echo $item->get_id() ?>">QUICK VIEW</a></li>
                                    </ul>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
                        <?php else: ?>
                        <p class="text-center"><em><small>No products available.</small></em></p>
                        <?php endif ?>

                        <div class="f-cards-wrap">
                            <?php get_template_part('template-parts/cards-list') ?>
                        </div>
                        
                        <?php if(!empty($items)): ?>
                        <div class="p-items">
                            <?php foreach($items as $item): ?>
                            <div class="item">
                                <div class="thumb">
                                    <?php echo get_the_post_thumbnail($item->get_id()) ?>
                                </div>

                                <div class="product-info content">
                                    <h3><span style="color:<?php echo get_field('color', $item->get_id()) ?>"><?php echo $item->get_name() ?></span></h3>
                                    <h6>TINCTURE</h6>
                                    <ul class="menu sizes">
                                        <li class="active"><a href="#"><strong>3000</strong>mg</a></li>
                                        <li><a href="#"><strong>2000</strong>mg</a></li>
                                    </ul>
                                    <span class="price">
                                        <sup><?php echo get_woocommerce_currency_symbol() ?></sup> <?php echo $item->get_price() ?>
                                    </span>
                                    <ul class="menu actions">
                                        <li><a href="<?php echo esc_url($item->add_to_cart_url()) ?>" class="button add-to-cart"><span class="icon-shopping-bag"></span> ADD TO BAG</a></li>
                                        <li><a href="#" class="button yith-wcqv-button" data-product_id="<?php echo $item->get_id() ?>"><img src="<?php echo MBN_ASSETS_URI ?>/img/eye.svg" width="20" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
                        <?php endif ?>

                    </div>
                    <?php endforeach ?>
                </div>
                </div>
            </div>
            <div class="large-12 cell text-center">
                <a href="<?php echo home_url('/products/') ?>" class="arrow-button">Shop Now</a>

                <a href="<?php echo home_url('/find-store/') ?>" class="find-store-btn">
                    <img src="<?php echo MBN_ASSETS_URI ?>/img/icn-find-a-store.svg" alt="">
                    Find A Store
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /BANNER -->


<div class="sec-intro section">
    <div class="grid-container">
        <div class="grid-x grid-marign-x align-center">
            <div class="cell large-12">
                <div class="text-wrap text-center"  data-aos="fade-down">
                    <h3><span class="blue">Our values</span> make us different</h3>
                    
                    <p>We hold ourselves to a higher standard because we care about keeping you healthy with products that are safe, pure, and work as promised.</p>
                </div>

                <div class="boxes">
                    <div class="box"  data-aos="flip-right">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="88.451" height="92.807" viewBox="0 0 88.451 92.807">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #c9c9c9
                                        }
                                        
                                        .cls-2 {
                                            fill: #14c8f0
                                        }
                                    </style>
                                </defs>
                                <g id="icn-backed-by-doctors" transform="translate(-32.922 -39.014)">
                                    <g id="Group_696" data-name="Group 696" transform="translate(75.753 95.43)">
                                        <g id="Group_694" data-name="Group 694" transform="translate(10.806 5.185)">
                                            <path id="Path_4074" d="M56.268 92.608h-2.751v-8.5a7.549 7.549 0 0 1 2.528-10.36l.275-.171 1.546-12.173 2.732.347-1.714 13.488-1.406.858a4.8 4.8 0 0 0-1.455 6.828l.245.349z" class="cls-1" data-name="Path 4074" transform="translate(-52.42 -61.407)" />
                                        </g>
                                        <g id="Group_695" data-name="Group 695">
                                            <path id="Path_4075" d="M51.243 95.908h-2.751c0-20.34 9.559-35.9 11.039-36.386l1.549.49-1.106.82.938.982c-1.205 1.372-9.669 15.592-9.669 34.094zm8.726-35.074l-1.1.814z" class="cls-1" data-name="Path 4075" transform="translate(-48.492 -59.522)" />
                                        </g>
                                    </g>
                                    <g id="Group_699" data-name="Group 699" transform="translate(59.495 95.43)">
                                        <g id="Group_697" data-name="Group 697" transform="translate(0 5.185)">
                                            <path id="Path_4076" d="M49.66 92.608h-2.751v-9.334l.242-.349A4.8 4.8 0 0 0 45.7 76.1l-1.406-.858-1.712-13.488 2.729-.347 1.543 12.173.275.171A7.548 7.548 0 0 1 49.66 84.11z" class="cls-1" data-name="Path 4076" transform="translate(-42.582 -61.407)" />
                                        </g>
                                        <g id="Group_698" data-name="Group 698" transform="translate(6.393)">
                                            <path id="Path_4077" d="M57.491 95.908H54.74c0-18.5-8.462-32.722-9.667-34.095l.952-.834-.008-.146-1.111-.823 1.549-.49c1.48.492 11.036 16.048 11.036 36.388z" class="cls-1" data-name="Path 4077" transform="translate(-44.906 -59.522)" />
                                        </g>
                                    </g>
                                    <g id="Group_700" data-name="Group 700" transform="translate(99.199 117.437)">
                                        <path id="Path_4078" d="M62.242 77.975a5.227 5.227 0 1 1 5.227-5.227 5.231 5.231 0 0 1-5.227 5.227zm0-7.7a2.476 2.476 0 1 0 2.476 2.476 2.478 2.478 0 0 0-2.476-2.478z" class="cls-2" data-name="Path 4078" transform="translate(-57.015 -67.522)" />
                                    </g>
                                    <g id="Group_701" data-name="Group 701" transform="translate(99.581 102.588)">
                                        <path id="Path_4079" d="M63.374 78.349h-2.751v-1.887A25.889 25.889 0 0 0 57.154 63.5l2.382-1.381a28.686 28.686 0 0 1 3.838 14.338z" class="cls-2" data-name="Path 4079" transform="translate(-57.154 -62.124)" />
                                    </g>
                                    <g id="Group_702" data-name="Group 702" transform="translate(48.458 102.588)">
                                        <path id="Path_4080" d="M41.321 76.462H38.57a28.658 28.658 0 0 1 3.838-14.338l2.38 1.381a25.915 25.915 0 0 0-3.467 12.957z" class="cls-2" data-name="Path 4080" transform="translate(-38.57 -62.124)" />
                                    </g>
                                    <g id="Group_703" data-name="Group 703" transform="translate(41.471 115.74)">
                                        <path id="Path_4081" d="M52.756 79.38H50v-4.112a5.612 5.612 0 1 0-11.224 0v4.112H36.03v-4.112a8.363 8.363 0 1 1 16.726 0z" class="cls-2" data-name="Path 4081" transform="translate(-36.03 -66.905)" />
                                    </g>
                                    <g id="Group_692" data-name="Group 692" transform="translate(83.948 91.028)">
                                        <path id="Path_4072" d="M86.143 98.715l-.036-9.389c.044-.487.781-8.206-7.6-13.207-5.419-3.235-13.581-6.107-19.474-7.942a10.71 10.71 0 0 1-7.568-10.255h2.751a7.964 7.964 0 0 0 5.637 7.628c6.033 1.882 14.412 4.833 20.065 8.209C89.874 79.7 88.9 89.084 88.85 89.48l.044 9.224z" class="cls-1" data-name="Path 4072" transform="translate(-51.471 -57.922)" />
                                    </g>
                                    <g id="Group_693" data-name="Group 693" transform="translate(32.922 91.028)">
                                        <path id="Path_4073" d="M35.716 98.71h-2.751v-9.389c-.039-.237-1.015-9.623 8.935-15.562 5.653-3.375 14.032-6.327 20.065-8.209a7.964 7.964 0 0 0 5.635-7.628h2.751a10.71 10.71 0 0 1-7.568 10.255c-5.892 1.835-14.054 4.707-19.474 7.942-8.377 5-7.639 12.72-7.6 13.048z" class="cls-1" data-name="Path 4073" transform="translate(-32.922 -57.922)" />
                                    </g>
                                    <g id="Group_704" data-name="Group 704" transform="translate(55.113 39.014)">
                                        <path id="Path_4082" d="M63.709 94.926h-1.365c-11.488 0-15.479-13.023-16.406-16.863-2.965-.531-4.949-3.183-4.949-6.809v-7.636h2.22V52.785A13.788 13.788 0 0 1 56.98 39.014h21.452v2.825a12.347 12.347 0 0 1-.091 1.5 7.527 7.527 0 0 1 4.5 6.886v13.393h2.179v7.637c0 3.686-1.931 6.291-4.908 6.814-.927 3.84-4.921 16.857-16.403 16.857zM43.74 66.369v4.886c0 2.011.875 4.159 3.326 4.159h1.144l.209 1.125c.03.154 3.032 15.636 13.925 15.636h1.364c10.918 0 13.895-15.479 13.925-15.636l.206-1.125h1.147c2.421 0 3.285-2.148 3.285-4.159v-4.886h-2.178v-16.14a4.775 4.775 0 0 0-2.415-4.146 12.343 12.343 0 0 1-11.568 8.078H55.434a1.774 1.774 0 0 0-1.772 1.772v2.022h-2.75v-2.023a4.526 4.526 0 0 1 4.522-4.522H66.11a9.587 9.587 0 0 0 9.213-6.976v-1.723c.107 0 .212 0 .316.008.028-.292.041-.583.041-.88v-.074h-18.7a11.032 11.032 0 0 0-11.02 11.02v13.584z" class="cls-1" data-name="Path 4082" transform="translate(-40.989 -39.014)" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span>
                            Backed by doctors
                        </span>
                    </div>
                    <div class="box"  data-aos="flip-right" data-aos-delay="200">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="98.546" height="99.238" viewBox="0 0 98.546 99.238">
                                <defs>
                                    <style>
                                        .prefix__cls-6 {
                                            fill: none
                                        }
                                        
                                        .prefix__cls-3 {
                                            fill: #14c8f0
                                        }
                                        
                                        .prefix__cls-5 {
                                            stroke: none
                                        }
                                    </style>
                                </defs>
                                <g id="prefix__icn-highly-effective" transform="translate(-735 -1758.762)">
                                    <g id="prefix__Ellipse_1011" data-name="Ellipse 1011" transform="translate(735 1768)" style="stroke:#c9c9c9;stroke-width:2px;fill:none">
                                        <circle cx="45" cy="45" r="45" class="prefix__cls-5" />
                                        <circle cx="45" cy="45" r="44" class="prefix__cls-6" />
                                    </g>
                                    <g id="prefix__Ellipse_1012" data-name="Ellipse 1012" transform="translate(754 1787)" style="stroke-width:3px;stroke:#90ebff;opacity:.996;fill:none">
                                        <circle cx="26" cy="26" r="26" class="prefix__cls-5" />
                                        <circle cx="26" cy="26" r="24.5" class="prefix__cls-6" />
                                    </g>
                                    <circle id="prefix__Ellipse_1013" cx="4" cy="4" r="4" class="prefix__cls-3" data-name="Ellipse 1013" transform="translate(776 1809)" />
                                    <path id="prefix__Path_4062" d="M-12959-19273l40.931-41.887" data-name="Path 4062" transform="translate(13739 21086)" style="stroke:#14c8f0;stroke-width:3px;fill:none" />
                                    <path id="prefix__Icon_material-keyboard-arrow-down" d="M11.115 11.76L18 18.63l6.885-6.87L27 13.875l-9 9-9-9z" class="prefix__cls-3" data-name="Icon material-keyboard-arrow-down" transform="rotate(45 -1693.91 1865.212)" />
                                </g>
                            </svg>
                        </div>
                        <span>
                            Highly effective
                        </span>
                    </div>
                    <div class="box"  data-aos="flip-right" data-aos-delay="400">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="92.914" height="93" viewBox="0 0 92.914 93">
                                <defs>
                                    <style>
                                        .prefix__cls-1,
                                        .prefix__cls-2 {
                                            fill: none;
                                            stroke-linecap: round;
                                            stroke-linejoin: round
                                        }
                                        
                                        .prefix__cls-1 {
                                            stroke: #14c8f0;
                                            stroke-width: 3px
                                        }
                                        
                                        .prefix__cls-2 {
                                            stroke: #b2b2ae;
                                            stroke-width: 2px
                                        }
                                    </style>
                                </defs>
                                <g id="prefix__icn-no-synthetic-additives" transform="translate(-210.5 -129.5)">
                                    <path id="prefix__Path_4067" d="M257.276 160.424c-5.871-8.171-12-17.169-15.276-29.424-7.5 28.074-30 39.058-30 62.143C212 208.762 226.143 221 242 221a31.3 31.3 0 0021.626-8.709" class="prefix__cls-1" data-name="Path 4067" />
                                    <path id="prefix__Path_4068" d="M243.014 176.512a25.482 25.482 0 00.549-5.274c0-8.091-2.764-14.7-6.679-21.073" class="prefix__cls-1" data-name="Path 4068" transform="translate(28.438 21.904)" />
                                    <ellipse id="prefix__Ellipse_1014" cx="21" cy="21.5" class="prefix__cls-2" data-name="Ellipse 1014" rx="21" ry="21.5" transform="translate(251 163)" />
                                    <path id="prefix__Line_24" d="M0 0L17 17" class="prefix__cls-2" data-name="Line 24" transform="translate(285 202)" />
                                    <path id="prefix__Path_4069" d="M230.9 177.075a20.765 20.765 0 01-14.747-15.939" data-name="Path 4069" transform="translate(4.741 34.441)" style="stroke:#90ebff;stroke-width:3px;fill:none;stroke-linecap:round;stroke-linejoin:round" />
                                    <text id="prefix___100_Pure" data-name="100% Pure" transform="translate(268 144)" style="fill:#14c8f0;font-size:13px;font-family:Prometo-Bold,Prometo;font-weight:700">
                                        <tspan x="0" y="0">100%</tspan>
                                        <tspan x="0" y="13">Pure</tspan>
                                    </text>
                                </g>
                            </svg>
                        </div>
                        <span>
                            No synthetic additives
                        </span>
                    </div>
                    <div class="box"  data-aos="flip-right" data-aos-delay="600">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="106.065" height="106.065" viewBox="0 0 106.065 106.065">
                                <defs>
                                    <style>
                                        .prefix__cls-4,
                                        .prefix__cls-6 {
                                            fill: none
                                        }
                                        
                                        .prefix__cls-4 {
                                            stroke: #c9c9c9;
                                            stroke-width: 4px
                                        }
                                        
                                        .prefix__cls-5 {
                                            stroke: none
                                        }
                                    </style>
                                </defs>
                                <g id="prefix__icn-alternative-to-opiates" transform="translate(-1446.968 -1750.967)">
                                    <g id="prefix__Component_15_3" data-name="Component 15 – 3" transform="translate(1476.646 1776.373)">
                                        <path id="prefix__Icon_awesome-prescription-bottle-alt" d="M35.886 0H2.392A2.4 2.4 0 000 2.393v4.785A2.4 2.4 0 002.392 9.57h33.494a2.4 2.4 0 002.392-2.393V2.393A2.4 2.4 0 0035.886 0zM3.19 47.852a3.2 3.2 0 003.19 3.19H31.9a3.2 3.2 0 003.19-3.19V12.761H3.19zm6.38-18.343a.8.8 0 01.8-.8h5.58v-5.58a.8.8 0 01.8-.8h4.785a.8.8 0 01.8.8v5.583h5.582a.8.8 0 01.8.8v4.785a.8.8 0 01-.8.8h-5.588v5.583a.8.8 0 01-.8.8h-4.782a.8.8 0 01-.8-.8v-5.588h-5.58a.8.8 0 01-.8-.8z" data-name="Icon awesome-prescription-bottle-alt" style="stroke-width:2px;stroke:#90ebff;fill:none" />
                                        <g id="prefix__Group_451" data-name="Group 451" transform="translate(24.852 35.988)">
                                            <g id="prefix__Rectangle_66" data-name="Rectangle 66" transform="rotate(45 9.023 21.783)" style="stroke:#14c8f0;stroke-width:2px;fill:none">
                                                <rect width="11.343" height="25.521" class="prefix__cls-5" rx="5.672" />
                                                <rect width="9.343" height="23.521" x="1" y="1" class="prefix__cls-6" rx="4.672" />
                                            </g>
                                            <g id="prefix__Rectangle_67" data-name="Rectangle 67" style="fill:#14c8f0;stroke:#14c8f0;stroke-width:2px">
                                                <path d="M0 0h11.343v7.089a5.671 5.671 0 01-5.671 5.671A5.671 5.671 0 010 7.089V0z" class="prefix__cls-5" transform="rotate(45 -6.38 15.404)" />
                                                <path d="M1.519 1h8.3a.519.519 0 01.519.519v5.57a4.671 4.671 0 01-4.671 4.671A4.671 4.671 0 011 7.089v-5.57A.519.519 0 011.519 1z" class="prefix__cls-6" transform="rotate(45 -6.38 15.404)" />
                                            </g>
                                        </g>
                                    </g>
                                    <g id="prefix__Group_469" data-name="Group 469">
                                        <g id="prefix__Group_452" data-name="Group 452" transform="translate(1446.968 1750.967)">
                                            <g id="prefix__Ellipse_1009" class="prefix__cls-4" data-name="Ellipse 1009">
                                                <circle cx="53.032" cy="53.032" r="53.032" class="prefix__cls-5" />
                                                <circle cx="53.032" cy="53.032" r="51.032" class="prefix__cls-6" />
                                            </g>
                                        </g>
                                        <path id="prefix__Line_23" d="M104.65 0L0 0" class="prefix__cls-4" data-name="Line 23" transform="rotate(45 -1401.708 2648.894)" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span>
                            Alternative to Opiates
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="sec-mission section" data-aos="fade-up" data-aos-offset="500">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-bottom">
            <div class="cell large-12">
                <!-- <img src="<?php echo MBN_ASSETS_URI ?>/img/spacer.png" alt=""> -->
                <div class="spacer"></div>
            </div>
            <div class="large-9 cell" data-aos="fade-down">
                <div class="text-wrap">
                    <h3><span class="blue">We’re on a mission</span><br/>
                    to make people feel good.</h3>
                    <p>It sounds simple, but there are so many CBD products out there that simply don’t work. Assisting our patients in their journey towards a pain-free life is our top priority at TOKA.</p>
                    <p>We searched the globe, did our own testing and research, and made sure we created a product that’s safe and more effective than anything on the market. All with one thing in mind, making people feel like the best version of themselves, naturally.</p>
                </div>
            </div>
            <div class="cell large-3" data-aos="fade-right" data-aos-delay="200">
                <div class="image-wrap">
                    <img src="<?php echo MBN_ASSETS_URI ?>/img/icn-partial-logo.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<section id="sec-reviews" class="sec-reviews section hide">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center">
            <div class="cell large-12">
                <div class="text-wrap text-center">
                    <h4>Dr. Pamela mills</h4>
                    <img src="<?php echo MBN_ASSETS_URI ?>/img/icn-5-strar.svg" alt="">
                    <p><em>Dr Jones is fabulous exceeds excellence professional caring and knowledgeable . As a physician myself I cannot recommend him more highly . He is a sweetheart and I am so very grateful my husband and I found him . We have been twice to Cancun to have stem cell therapy. It is truly a most remarkable experience with the added benefits of feeling well Again A million heartfelt thanks.</em></p>
                </div>
                <div class="button-wrap">
                    <a href="#" class="arrow-button">READ MORE REVIEWS</a>
                    <a href="#" class="write-button">Write Us a Review</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="sec-find" class="sec-find section" data-aos="zoom-in" data-aos-offset="500" style="max-height:1190px;">
    <div class="grid-container fluid">
        <div class="grid-x grid-margin-x">
            <div class="cell large-12">
                <div class="find-slider">
                    <div class="slide-item">
                        <div class="slide-content">
                            <div class="thumb">
                                <img src="<?php echo MBN_ASSETS_URI ?>/img/img-feature-sleep.jpg" alt="">
                            </div>
                            <div class="text">
                                <h4>Find Your Relief:</h4>
                                <h2>Sleep</h2>
                                <a href="<?php echo home_url('/products/') ?>" class="arrow-button">Explore Products</a>
                            </div>
                            <div class="note">
                                <h4 style="color:#1c8ece">100%</h4>
                                <h5>
                                    ORGANIC INDUSTRIAL<br>
                                    HEMP GROWN<br>
                                    IN COLORADO
                                </h5>
                            </div>

                            <div class="product">
                                <img src="<?php echo MBN_ASSETS_URI ?>/img/img-product-sleep.png" alt="">
                            </div>
                            <div class="product2">
                                <img src="<?php echo MBN_ASSETS_URI ?>/img/img-product-sleep.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="slide-item">
                        <div class="slide-content">
                            <div class="thumb">
                                <img src="<?php echo MBN_ASSETS_URI ?>/img/img-feature-energy.jpg" alt="">
                            </div>
                            <div class="text">
                                <h4>Find Your Relief:</h4>
                                <h2>Energy</h2>
                                <a href="#" class="arrow-button">Explore Products</a>
                            </div>
                            <div class="note">
                                <h4 style="color:#f7941d">100%</h4>
                                <h5>
                                    ORGANIC INDUSTRIAL<br>
                                    HEMP GROWN<br>
                                    IN COLORADO
                                </h5>
                            </div>

                            <div class="product">
                                <img src="<?php echo MBN_ASSETS_URI ?>/img/img-product-energy.png" alt="">
                            </div>
                            <div class="product2">
                                <img src="<?php echo MBN_ASSETS_URI ?>/img/img-product-energy.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="slide-item">
                        <div class="slide-content">
                            <div class="thumb">
                                <img src="<?php echo MBN_ASSETS_URI ?>/img/img-feature-libido.jpg" alt="">
                            </div>
                            <div class="text">
                                <h4>Find Your Relief:</h4>
                                <h2>Libido</h2>
                                <a href="#" class="arrow-button">Explore Products</a>
                            </div>
                            <div class="note">
                                <h4 style="color:#b58dc0">100%</h4>
                                <h5>
                                    ORGANIC INDUSTRIAL<br>
                                    HEMP GROWN<br>
                                    IN COLORADO
                                </h5>
                            </div>

                            <div class="product">
                                <img src="<?php echo MBN_ASSETS_URI ?>/img/img-product-libido.png" alt="">
                            </div>
                            <div class="product2">
                                <img src="<?php echo MBN_ASSETS_URI ?>/img/img-product-libido.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="slide-item">
                        <div class="slide-content">
                            <div class="thumb">
                                <img src="<?php echo MBN_ASSETS_URI ?>/img/img-feature-skincare.jpg" alt="">
                            </div>
                            <div class="text">
                                <h4>Find Your Relief:</h4>
                                <h2>Skincare</h2>
                                <a href="#" class="arrow-button">Explore Products</a>
                            </div>
                            <div class="note">
                                <h4 style="color:#222222">100%</h4>
                                <h5>
                                    ORGANIC INDUSTRIAL<br>
                                    HEMP GROWN<br>
                                    IN COLORADO
                                </h5>
                            </div>

                            <!-- <div class="product">
                                <img src="<?php echo MBN_ASSETS_URI ?>/img/img-product-skincare2.png" alt="">
                            </div> -->
                        </div>
                    </div>
                </div>
                
                <div class="find-slider-nav">
                    <div class="slide-item" style="color:#1c8ece"><a href="javascript:void(0)">Sleep</a></div>
                    <div class="slide-item" style="color:#f7941d"><a href="javascript:void(0)">Energy</a></div>
                    <div class="slide-item" style="color:#b58dc0"><a href="javascript:void(0)">Libido</a></div>
                    <div class="slide-item" style="color:#222222"><a href="javascript:void(0)" class="small-text">Skincare</a></div>
                </div>

                <h4 class="sub-head">Find Your Relief:</h4>
                
                <div class="button-wrap">
                    <a href="<?php echo home_url('/products/') ?>" class="arrow-button">Explore Products</a>
                </div>
            </div>
        </div>
    </div>

    <div class="background-objects">
        <img src="<?php echo MBN_ASSETS_URI ?>/img/bg-sleep-toka.svg" alt="" class="obj1">
    </div>
</section>

<?php get_template_part('template-parts/section-faqs') ?>


<?php get_footer() ?>