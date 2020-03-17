
<div class="side-notice"><?php woocommerce_output_all_notices(); ?></div>

<!-- ACCOUNT SETTINGS -->
<div id="account-settings" class="account-settings sidebar-menu-wrap">

    
   
    <div class="sidebar-menu is-right">
        <div class="inner with-scrollbar">
        <?php 
            if( ! is_user_logged_in() ){  //woocommerce_login_form(); 
            do_action( 'woocommerce_before_customer_login_form' ); ?>
            
            <ul class="tabs" data-tabs id="account-tabs">
                <li class="tabs-title is-active"><a href="#login">LOGIN</a></li>
                <li class="tabs-title"><a href="#register">CREATE AN ACCOUNT</a></li>
            </ul>

            <div class="tabs-content" data-tabs-content="account-tabs">
                <div class="tabs-panel is-active" id="login">
                    <div class="text-center">
                        <img src="<?php echo MBN_ASSETS_URI ?>/img/logo-toka-blk.svg" alt="">
                    </div>
  
                    <form class="woocommerce-form woocommerce-form-login login login-form" method="post">

						<?php do_action( 'woocommerce_login_form_start' ); ?>

                        <label for="username" class="">
                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" placeholder="<?php esc_html_e( 'Username or Email', 'woocommerce' ); ?>" /> 
                        </label>
                    
                        <label for="password" class="">
                            <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" placeholder="<?php esc_html_e( 'Password', 'woocommerce' ); ?>" />
                        </label>

						<?php do_action( 'woocommerce_login_form' ); ?>

						<div class="form-row action-buttons">
							<label class="hide woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
								<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
							</label>
							<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
							<button type="submit" class="woocommerce-button button secondary expanded woocommerce-form-login__submit" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Sign In', 'woocommerce' ); ?></button>
						</div>
						<div  class="forgot-pass"><?php esc_html_e( 'Forgot your', 'woocommerce' ); ?>
							<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'password?', 'woocommerce' ); ?></a>
						</div>

						<?php do_action( 'woocommerce_login_form_end' ); ?>

					</form>
                </div>
                <div class="tabs-panel" id="register">

                <form method="post" class="woocommerce-form woocommerce-form-register register register-form" <?php do_action( 'woocommerce_register_form_tag' ); ?> >
                    <fieldset>
                        <legend>Personal Details</legend>

                        <?php do_action( 'woocommerce_register_form_start' ); ?>

                        <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

                            <div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                <label for="reg_username"><?php  esc_html_e( 'Username', 'woocommerce' ); ?> <span class="required">*</span>
                                <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" placeholder="<?php esc_html_e( 'Username', 'woocommerce' ); ?>" />
                                </label>
                            </div>

                        <?php endif; ?>

                        <div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span>
                            <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" placeholder="<?php esc_html_e( 'Email address', 'woocommerce' ); ?>" />
                            </label>
                        </div>

                        <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

                            <div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                <label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?> <span class="required">*</span>
                                <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" placeholder="<?php esc_html_e( 'Password', 'woocommerce' ); ?>" />
                                </label>
                            </div>

                        <?php else : ?>

                            <div><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></div>

                        <?php endif; ?>
                       
                        <?php do_action( 'woocommerce_register_form' ); ?>

                        <div class="woocommerce-FormRow form-row">
                            <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
                            <button type="submit" class="woocommerce-Button woocommerce-button button secondary expanded woocommerce-form-register__submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
                        </div>
                    </fieldset>

                    <?php do_action( 'woocommerce_register_form_end' ); ?>

                    </form>

                </div>
            </div>

            
            <?php do_action( 'woocommerce_after_customer_login_form' ); 
                
            } else { ?>
                
                <h6>My Account</h6>		
                <?php do_action( 'woocommerce_account_navigation' );

            } ?>

        </div>
    </div>

</div>
<!-- /ACCOUNT SETTINGS -->