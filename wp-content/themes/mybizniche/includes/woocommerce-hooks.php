<?php

function mbn_wc_cart_count_fragments($fragments){
    $fragments['span.shopping-cart-count'] = '<span class="shopping-cart-count">'.WC()->cart->get_cart_contents_count().'</span>';
    $fragments['span.shopping-cart-total'] = '<span class="shopping-cart-total">'.WC()->cart->total.'</span>';

    return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments', 'mbn_wc_cart_count_fragments', 10, 1);



function mbn_wc_empty_cart_message(){
    if(WC()->cart->is_empty()){
        printf('<div class="mini-cart-empty"><p class="mini-cart-empty-message"><span>%s</span></p>
                    <a href="%s" class="arrow-button">%s</a></div>',
            'CART IS EMPTY',
            wc_get_checkout_url(),
            'SHOP NOW'
        );
    }
}
add_action('woocommerce_after_mini_cart', 'mbn_wc_empty_cart_message');