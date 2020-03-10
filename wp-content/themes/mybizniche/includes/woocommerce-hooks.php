<?php


//Change several of the breadcrumb defaults
add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => '',
            'wrap_before' => '<nav class="woocustom-breadcrumb" itemprop="breadcrumb">',
            'wrap_after'  => '</nav>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( 'TOKA', 'breadcrumb', 'woocommerce' ),
        );
}


//Product custom sale price badge
function custom_product_sale_flash( $output, $post, $product ) {
    global $product;
    if($product->is_on_sale()) {
        if($product->is_type( 'variable' ) )
        {
            $regular_price = $product->get_variation_regular_price();
            $sale_price = $product->get_variation_price();
        } else {
            $regular_price = $product->get_regular_price();
            $sale_price = $product->get_sale_price();
        }
        $percent_off = (($regular_price - $sale_price) / $regular_price) * 100;
        return '<span class="onsale">' . round($percent_off) . '% OFF</span>';
    }
}
add_filter( 'woocommerce_sale_flash', 'custom_product_sale_flash', 11, 3 );


/*
** WC Fragments
*/
function mbn_wc_cart_fragments($fragments){
    $fragments['span.shopping-cart-count'] = '<span class="shopping-cart-count">'.WC()->cart->get_cart_contents_count().'</span>';
    $fragments['span.shopping-cart-total'] = '<span class="shopping-cart-total">'.WC()->cart->total.'</span>';

    return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments', 'mbn_wc_cart_fragments', 10, 1);



/*
** WC Empty message
*/
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