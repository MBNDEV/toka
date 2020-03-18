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

//Automatically Update Cart on Quantity Change
//--------------------------------------------
function mbn_cart_refresh_update_qty() { 
    if (is_cart()) { 
       ?> 
       <script type="text/javascript"> 
          jQuery('div.woocommerce').on('click', 'input.qty', function(){ 
             jQuery("[name='update_cart']").trigger("click"); 
          }); 
       </script> 
       <style>
           button[name='update_cart'] {display: none !important;}
       </style>
       <?php 
    } 
 }
 add_action( 'wp_footer', 'mbn_cart_refresh_update_qty' ); 
 

// To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Add to Bag', 'woocommerce' ); 
}

// To change add to cart text on product archives(Collection) page
//add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
function woocommerce_custom_product_add_to_cart_text() {
    return __( 'Add to Bag', 'woocommerce' );
}



// 1. ADD FIELDS
add_action( 'woocommerce_register_form_start', 'add_fields_registration_start' );
function add_fields_registration_start() {
    ?>
    <div class="form-row form-row-first">
        <label for="reg_billing_first_name"><?php _e( 'First name', 'woocommerce' ); ?>  <span class="required">*</span>
            <input type="text" class="input-text" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" placeholder="<?php _e( 'First name', 'woocommerce' ); ?>" />
        </label>
    </div>
 
    <div class="form-row form-row-last">
        <label for="reg_billing_last_name"><?php _e( 'Last name', 'woocommerce' ); ?> <span class="required">*</span>
            <input type="text" class="input-text" name="billing_last_name" id="reg_billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" placeholder="<?php _e( 'Last name', 'woocommerce' ); ?>" />
        </label>
    </div>
 
    <div class="clear"></div>
 
    <?php
}

add_action( 'woocommerce_register_form', 'add_fields_registration_after' );
function add_fields_registration_after() {
    ?>
    
    <div class="form-row form-row-wide">
        <label for="reg_password2"><?php _e( 'Confirm Possword', 'woocommerce' ); ?> <span class="required">*</span>
        <input type="password" class="input-text" name="password2" id="reg_password2" value="<?php if ( ! empty( $_POST['password2'] ) ) esc_attr_e( $_POST['password2'] ); ?>" placeholder="<?php _e( 'Confirm Possword', 'woocommerce' ); ?>" />
        </label>
    </div>
    </fieldset> 
    <fieldset>
    <legend>Shipping Details</legend>
    
    <?php 
        $field = ['type' => 'country','label' => 'Country','required' => 1,'class' => ['address-field'], 'default' => 'US'];
        woocommerce_form_field( 'shipping_country', $field, '' );
    ?>

    <div class="form-row form-row-wide">
        <label for="reg_shipping_company"><?php _e( 'Company Name', 'woocommerce' ); ?>
        <input type="text" class="input-text" name="shipping_company" id="reg_shipping_company" value="<?php if ( ! empty( $_POST['shipping_company'] ) ) esc_attr_e( $_POST['shipping_company'] ); ?>" placeholder="<?php _e( 'Company Name', 'woocommerce' ); ?>" />
        </label>    
    </div>

    <div class="form-row form-row-wide">
        <label for="reg_shipping_city"><?php _e( 'Suburb/City', 'woocommerce' ); ?>
        <input type="text" class="input-text" name="shipping_city" id="reg_shipping_city" value="<?php if ( ! empty( $_POST['shipping_city'] ) ) esc_attr_e( $_POST['shipping_city'] ); ?>" placeholder="<?php _e( 'Suburb/City', 'woocommerce' ); ?>" />
        </label>    
    </div>

    
    <?php 

        $field = ['type' => 'state','label' => 'State','required' => 1,'validate' => ['state'], 'placeholder' => 'test' ];
        woocommerce_form_field( 'shipping_state', $field, '' );
    ?>

    <div class="form-row form-row-wide">
        <label for="reg_shipping_postcode"> <?php _e( 'Zip/Postcode', 'woocommerce' ); ?>
        <input type="text" class="input-text" name="shipping_postcode" id="reg_shipping_postcode" value="<?php if ( ! empty( $_POST['shipping_postcode'] ) ) esc_attr_e( $_POST['shipping_postcode'] ); ?>" placeholder="<?php _e( 'Zip/Postcode', 'woocommerce' ); ?>" />
        </label>    
    </div>
 
    <div class="clear"></div>
 
    <?php
}
 

// 2. VALIDATE FIELDS
add_filter( 'woocommerce_registration_errors', 'validate_name_fields', 10, 3 );
 
function validate_name_fields( $errors, $username, $email ) {
    global $woocommerce;
    extract( $_POST );

    if ( isset( $_POST['billing_first_name'] ) && empty( $_POST['billing_first_name'] ) ) {
        $errors->add( 'billing_first_name_error', __( '<strong>Error</strong>: First name is required!', 'woocommerce' ) );
    }
    if ( isset( $_POST['billing_last_name'] ) && empty( $_POST['billing_last_name'] ) ) {
        $errors->add( 'billing_last_name_error', __( '<strong>Error</strong>: Last name is required!.', 'woocommerce' ) );
    }

    if ( strcmp( $password, $password2 ) !== 0 ) {
        return new WP_Error( 'registration-error', __( 'Passwords do not match.', 'woocommerce' ) );
    }

    return $errors;
}
 

// 3. SAVE FIELDS
add_action( 'woocommerce_created_customer', 'save_name_fields' );
function save_name_fields( $customer_id ) {
    if ( isset( $_POST['billing_first_name'] ) ) {
        update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
        update_user_meta( $customer_id, 'first_name', sanitize_text_field($_POST['billing_first_name']) );
    }
    if ( isset( $_POST['billing_last_name'] ) ) {
        update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
        update_user_meta( $customer_id, 'last_name', sanitize_text_field($_POST['billing_last_name']) );
    }

    if ( isset( $_POST['shipping_country'] ) ) {
        update_user_meta( $customer_id, 'shipping_country', sanitize_text_field( $_POST['shipping_country'] ) );
        update_user_meta( $customer_id, 'country', sanitize_text_field($_POST['shipping_country']) );
    }
    if ( isset( $_POST['shipping_company'] ) ) {
        update_user_meta( $customer_id, 'shipping_company', sanitize_text_field( $_POST['shipping_company'] ) );
        update_user_meta( $customer_id, 'company', sanitize_text_field($_POST['shipping_company']) );
    }
    if ( isset( $_POST['shipping_city'] ) ) {
        update_user_meta( $customer_id, 'shipping_city', sanitize_text_field( $_POST['shipping_city'] ) );
        update_user_meta( $customer_id, 'city', sanitize_text_field($_POST['shipping_city']) );
    }
    if ( isset( $_POST['shipping_state'] ) ) {
        update_user_meta( $customer_id, 'shipping_state', sanitize_text_field( $_POST['shipping_state'] ) );
        update_user_meta( $customer_id, 'state', sanitize_text_field($_POST['shipping_state']) );
    }
    if ( isset( $_POST['shipping_postcode'] ) ) {
        update_user_meta( $customer_id, 'shipping_postcode', sanitize_text_field( $_POST['shipping_postcode'] ) );
        update_user_meta( $customer_id, 'postcode', sanitize_text_field($_POST['shipping_postcode']) );
    }
 
}