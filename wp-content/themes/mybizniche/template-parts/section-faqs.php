<?php
$faqs = get_posts([
    'numberposts'   => -1,
    'post_type'     => 'faq',
    'meta_key'      => 'add_to_features',
    'order'         => 'asc',
    'meta_value'    => true
]);
?>

<section id="sec-faq" class="sec-faq section">
    <div class="grid-container fluid">
        <div class="grid-x">
            <div class="cell large-12 text-center">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <?php if($faqs): ?>
                <a href="#faq-boxes" class="button-circ-down smoothscrolling">Down</a>
                <?php endif ?>
            </div>
            <div class="cell large-12">
                <div id="faq-boxes" class="faq-boxes">
                    <?php  foreach($faqs as $key => $faq): ?>
                    <div class="faq-box faq-box-<?php echo $key + 1 ?>" <?php echo in_array($key+1, [2, 3]) ?'data-mh="faqs"' :'' ?>>
                        <div class="text">
                            <h3><?php echo $faq->post_title ?></h3>
                            <?php echo wpautop($faq->post_content) ?>
                        </div>
                    </div>
                    <?php endforeach ?>
                    <!-- <div class="faq-box faq-box-1">
                        <div class="text">
                            <h3>What is CBD?</h3>
                            <p>Cannabidiol (CBD) is a naturally-occurring constituent of industrial hemp (cannabis sativa) plants. It is the most abundant non-psychoactive cannabinoid found in cannabis and is being scientifically investigated for numerous reasons. Most people have heard of a cannabinoid called THC, which is the ingredient in cannabis that gets users high. Unlike THC, CBD (cannabidiol) is a non-intoxicating cannabinoid and does not cause a high.</p>
                        </div>
                    </div>
                    <div class="faq-box faq-box-2" data-mh="faq-box">
                        <div class="text">
                            <h3>Is CBD oil legal?</h3>
                            <p>Industrial hemp was legalized with the passage of the United States Farm Bill of 2018. CBD containing less than 0.3% of THC is legal in all 50 states. Many states are also passing their own legislation to legalize hemp and CBD products further. You do not need a prescription to buy CBD oil. CBD laws vary internationally. We recommend you research the legality of CBD in your country before making a purchase.</p>
                        </div>
                    </div>
                    <div class="faq-box faq-box-3" data-mh="faq-box">
                        <div class="text">
                            <h3>What can CBD be used for?</h3>
                            <p>CBD has a wide range of uses, including the potential to treat anxiety, depression, aches and pains, and other everyday ailments. While we can’t make medical claims to what CBD can or can’t treat, it has been shown to have a positive impact on people’s and pet’s lives.</p>
                        </div>
                    </div> -->
                </div>
                <div class="faq-cta">
                    <a href="<?php echo home_url('/faqs/') ?>">
                        <span class="arrow-button">Visit FAQ Page</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>