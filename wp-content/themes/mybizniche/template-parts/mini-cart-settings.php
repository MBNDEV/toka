
<!-- MINI CART SETTINGS -->
<div id="mini-cart-settings" class="mini-cart-settings sidebar-menu-wrap">
    <div class="sidebar-menu is-right">
        <div class="inner with-scrollbar">
            <ul class="top">
                <li><span class="cart-count">Cart Items(<?php get_template_part('template-parts/shopping-cart-count') ?>)</span></li>
                <li><button class="close">x</button></li>
            </ul>
            
            <div class="mini-cart" id="mini-cart">
                <?php woocommerce_mini_cart(); ?>
                <?php // dynamic_sidebar('mini-cart') ?>
            </div>
            <div class="mini-cart-summary">
                <div class="total-price">
                    <label>TOTAL:</label>
                    <div class="price">
                        <sup><?php echo get_woocommerce_currency_symbol() ?></sup>
                        <span class="shopping-cart-total"><?php echo WC()->cart->total ?></span>
                    </div>
                </div>
                <ul class="cards">
                    <li><img src="<?php echo MBN_ASSETS_URI ?>/img/icn-amex.png" alt=""></li>
                    <li><img src="<?php echo MBN_ASSETS_URI ?>/img/icn-mastercard.png" alt=""></li>
                    <li><img src="<?php echo MBN_ASSETS_URI ?>/img/icn-visa.png" alt=""></li>
                    <li><img src="<?php echo MBN_ASSETS_URI ?>/img/icn-discover.png" alt=""></li>
                </ul>
                <a href="<?php echo wc_get_checkout_url(); ?>" class="button secondary expanded">PROCEED TO CHECKOUT</a>
            </div>
        </div>
    </div>
</div>
<!-- /MINI CART SETTINGS -->
<script>
    $(function(){
        $('.remove_from_cart_button').click(function(){
            $(this).parent().remove();
           // return false;
        });
    });
</script>