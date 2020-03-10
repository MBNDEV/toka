
<!-- ACCOUNT SETTINGS -->
<div id="account-settings" class="account-settings sidebar-menu-wrap">
    <div class="sidebar-menu is-right">
        <div class="inner with-scrollbar">
            <ul class="tabs" data-tabs id="account-tabs">
                <li class="tabs-title is-active"><a href="#login">LOGIN</a></li>
                <li class="tabs-title"><a href="#register">CREATE AN ACCOUNT</a></li>
            </ul>

            <div class="tabs-content" data-tabs-content="account-tabs">
                <div class="tabs-panel is-active" id="login">
                    <div class="text-center">
                        <img src="<?php echo MBN_ASSETS_URI ?>/img/logo-toka-blk.svg" alt="">
                    </div>
                    <form action="" class="login-form">
                        <label for="">
                            <input type="text" placeholder="Username or Email">
                        </label>
                        <label for="">
                            <input type="password" placeholder="Password">
                        </label>
                        <label class="action-buttons">
                            <button type="submit" class="button secondary expanded">SIGN IN</button>
                        </label>
                    </form>
                    <div class="forgot-pass"><a href="#">Forgot your <span class="td-underline">username</span> or <span class="td-underline">password</span>?</a></div>
                </div>
                <div class="tabs-panel" id="register">
                    <form action="" class="register-form">
                        <fieldset>
                            <legend>Personal Details</legend>
                            <div class="grid-x grid-padding-x">
                                <div class="cell large-6">
                                    <label for="">
                                        <input type="text" placeholder="First Name">
                                    </label>
                                </div>
                                <div class="cell large-6">
                                    <label for="">
                                        <input type="text" placeholder="Last Name">
                                    </label>
                                </div>
                                <div class="cell large-12">
                                    <label for="">
                                        <input type="text" placeholder="Email Address">
                                    </label>
                                </div>
                                <div class="cell large-12">
                                    <label for="">
                                        <input type="text" placeholder="Phone Number">
                                    </label>
                                </div>
                                <div class="cell large-12">
                                    <label for="">
                                        <input type="text" placeholder="Password">
                                    </label>
                                </div>
                                <div class="cell large-12">
                                    <label for="">
                                        <input type="text" placeholder="Confirm Password">
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Shipping Details</legend>
                            <div class="grid-x grid-padding-x">
                                <div class="cell large-12">
                                    <label for="">
                                        <input type="text" placeholder="Country">
                                    </label>
                                </div>
                                <div class="cell large-12">
                                    <label for="">
                                        <input type="text" placeholder="Address">
                                    </label>
                                </div>
                                <div class="cell large-12">
                                    <label for="">
                                        <input type="text" placeholder="Company Name">
                                    </label>
                                </div>
                                <div class="cell large-12">
                                    <label for="">
                                        <input type="text" placeholder="Suburb/City">
                                    </label>
                                </div>
                                <div class="cell large-12">
                                    <label for="">
                                        <input type="text" placeholder="State/Province">
                                    </label>
                                </div>
                                <div class="cell large-6">
                                    <label for="">
                                        <input type="text" placeholder="Zip/Postcode">
                                    </label>
                                </div>
                                <div class="cell large-12">
                                    <label class="action-buttons">
                                        <button type="submit" class="button secondary expanded">CREATE MY ACCOUNT</button>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /ACCOUNT SETTINGS -->