
        
        <!-- FOOTER -->
        <footer id="footer" class="footer">
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <div class="cell large-12">
                        <div class="f-top">
                            <?php get_template_part('template-parts/contact-info') ?>
                        </div>
                    </div>
                    <div class="cell large-2">
                        <div class="f-menu">
                            <?php dynamic_sidebar('footer-area-1') ?>
                            <!-- <h4>About</h4>
                            <ul class="menu vertical">
                                <li class="hide-link">
                                    <a href="#">&nbsp;</a>
                                    <ul class="sub-menu menu vertical">
                                        <li><a href="#">Why Toka?</a></li>
                                        <li><a href="#">Reviews</a></li>
                                        <li><a href="#">Press</a></li>
                                        <li><a href="#">Blog</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="cell small-6 large-2">
                        <div class="f-menu">
                            <?php dynamic_sidebar('footer-area-2') ?>
                            <!-- <h4>Shop</h4>
                            <ul class="menu vertical">
                                <li>
                                    <a href="#">Product Type</a>
                                    <ul class="sub-menu menu vertical">
                                        <li><a href="#">Edibles</a></li>
                                        <li><a href="#">Skincare</a></li>
                                        <li><a href="#">Inhalants</a></li>
                                        <li><a href="#">Oil Tinctures</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="cell small-6 large-2">
                        <div class="f-menu">
                            <?php dynamic_sidebar('footer-area-3') ?>
                            <!-- <h4>&nbsp;</h4>
                            <ul class="menu vertical">
                                <li>
                                    <a href="#">Find Your Relief</a>
                                    <ul class="sub-menu menu vertical">
                                        <li><a href="#">Sleep</a></li>
                                        <li><a href="#">Energy</a></li>
                                        <li><a href="#">Libido</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="cell medium-6 large-2">
                        <div class="f-menu">
                            <?php dynamic_sidebar('footer-area-4') ?>
                            <!-- <h4>Help</h4>
                            <ul class="menu vertical">
                                <li class="hide-link">
                                    <a href="#"></a>
                                    <ul class="sub-menu menu vertical">
                                        <li><a href="#">FAQs</a></li>
                                        <li><a href="#">Shipping and Returns</a></li>
                                        <li><a href="#">contact</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="cell medium-6 large-4">
                        <div class="subscribe-form">
                            <h4><span class="blue">Ready to Feel Relief?</span><br>
                            Sign up to receive 10% off your first order!</h4>
                            <div class="input-group">
                                <input type="text" class="input-group-field" placeholder="Enter your email address here..">
                                <div class="input-group-button">
                                    <button class="button">SIGN UP <span class="icon-arrow-right"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell large-12">
                        <div class="f-bottom text-center">
                            <?php get_template_part('template-parts/cards-list') ?>

                            <div class="f-copyright">
                                <p>
                                    &copy; TOKA COPYRIGHT <?php echo date('Y') ?>.&nbsp;&nbsp;
                                    All Prices are USD.&nbsp;&nbsp;
                                    <a href="#">Website Design</a> by: My Biz Niche</p>
                            </div>

                            <div class="f-note">
                                <p>The information and products contained on this website have not been evaluated by the FDA and are not intended to diagnose, treat or cure any disease. You are advised to consult with your health care practitioner prior to use.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /FOOTER -->

    </div>
    <!-- /WRAPPER -->
    

    <?php wp_footer() ?>
    
 <script>
    jQuery(function(){
        jQuery('.woocommerce-notices-wrapper').append('<span class="close-notify" />');
        jQuery('.close-notify').click(function(){
            //jQuery(this).parent().addClass('hide');
            jQuery(this).parent().children().first().remove();
        })
    });
</script>

</body>
</html>