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
                <h2 class="section-title" data-aos="fade-right" data-aos-offset="200">Frequently Asked Questions</h2>
                <?php if($faqs): ?>
                <a href="#faq-boxes" data-aos="fade-up" class="button-circ-down smoothscrolling">Down</a>
                <?php endif ?>
            </div>
            <div class="cell large-12">
                <div id="faq-boxes" class="faq-boxes">
                    <?php  foreach($faqs as $key => $faq): ?>
                    <div class="faq-box faq-box-<?php echo $key + 1 ?>" <?php echo in_array($key+1, [2, 3]) ?'data-mh="faqs"' :'' ?>  data-aos="fade-up" data-aos-offset="100">
                        <div class="text">
                            <h3><?php echo $faq->post_title ?></h3>
                            <?php echo wpautop($faq->post_content) ?>
                        </div>
                    </div>
                    <?php endforeach ?>
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