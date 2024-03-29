=== WooCommerce Square ===
Contributors: automattic, royho, woothemes, bor0
Tags: credit card, square, woocommerce, inventory sync
Requires at least: 4.6
Tested up to: 5.4
Requires PHP: 5.6
Stable tag: 2.1.5
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Sync inventory and product data between WooCommerce and Square POS. Securely accept payments via the Square payment gateway.

== Description ==

Sync inventory and product data between WooCommerce and Square POS. Securely accept payments via the Square payment gateway.

= Accept credit card payments easily and directly on your store =

The Square plugin extends WooCommerce to allow you to accept payments via Square. Benefit from a **PCI compliant** payment processing option that meets SAQ A levels of compliance.

You can also use these advanced features:

- Support for [WooCommerce Subscriptions](https://woocommerce.com/products/woocommerce-subscriptions/)
- Support for [WooCommerce Pre-Orders](https://woocommerce.com/products/woocommerce-pre-orders/)
- Allow customers to save payment methods and use them at checkout
- Use an enhanced payment form with automatic formatting, mobile-friendly inputs, and retina card icons

= Sync your product catalog with Square =

You can sync your product data automatically between WooCommerce and Square.

- If you sell mainly online, you can choose WooCommerce as your system of record. This will push the WooCommerce product name, inventory, prices, categories, and images to Square. Note that inventory will still be fetched periodically from Square and you must refresh inventory in WooCommerce before editing.
- If you sell in multiple locations and online, you can choose Square as your system of record. This will pull product name, inventory, and prices from Square into your WooCommerce catalog. Product images will also be synced if not already set in WooCommerce.

== Installation ==

You can download an [older version of this gateway for older versions of WooCommerce from here](https://wordpress.org/plugins/woocommerce-square/developers/).

= Automatic installation =

Automatic installation is the easiest option as WordPress handles the file transfers itself and you don’t need to leave your web browser. To
automatically install WooCommerce Square, log in to your WordPress dashboard, navigate to the Plugins menu, and click **Add New**.

In the search field type "WooCommerce Square" and click **Search Plugins**. Once you've found our plugin you can install it by clicking **Install Now**, as well as view details about it such as the point release, rating, and description.

= Manual installation =

The manual installation method involves downloading our plugin and uploading it to your web server via your favorite FTP application. The WordPress codex contains [instructions on how to do this here](http://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation).

= Updating =

Automatic updates should work like a charm; as always though, ensure you backup your site just in case.

== Frequently Asked Questions ==

= Does this require an SSL certificate? =

Yes! An SSL certificate must be installed on your site to use Square.

= Where can I find documentation? =

For help setting up and configuring the plugin, please refer to our [user guide](https://docs.woocommerce.com/document/woocommerce-square/).

= Where can I get support or talk to other users? =

If you get stuck, you can ask for help in the [Plugin Forum](https://wordpress.org/support/plugin/woocommerce-square/).

== Screenshots ==

1. The main plugin settings.
2. The payment gateway settings.

== Changelog ==

= 2.1.5 - 2020.05.15 =
* Fix - Fatal errors caused by incorrectly fetching locations before plugin init.
* Fix - WordPress database error when creating the Square Customers table on servers using utf8mb4.

= 2.1.4 - 2020.05.05 =
* Fix - Make sure that Square credit card fields are editable after checkout form refresh.

= 2.1.3 - 2020.04.30 =
* Fix - Persistent caching of locations to prevent unnecessary refetching and rate limiting.

= 2.1.2 - 2020.04.29 =
* Fix - INTENT_MISMATCH errors when guest customers save a card and registration is disabled.
* Fix - Improve checkout compatibility with password managers such as 1Password. This also avoids payment for reload on address change.
* Fix - Pass valid address values even if checkout fields are not present.
* Tweak - Sandbox mode can be turned on in the settings, no more need for setting the constant.
* Tweak - Change location URL to refer to our docs.

= 2.1.1 - 2020.03.23 =
* Fix - Inventory/Stock updates as a result of checkout via PayPal Standard does not reflect on the Square item.
* Fix - Error when trying to save an external product with the modified 'sync with square' value.
* Fix - Move product check on a possibly invalid product out of the try block avoiding potential further errors.

= 2.1.0 - 2020.02.11 =
* Feature - Add support for SCA (3D Secure 2)
* Fix     - Minor fixes to the Sync completed emails
* Tweak   - Add email notifications when connection issues are detected
* Fix     - Category sync when WooCommerce is the System of Record and there have been changes in Square

= 2.0.8 - 2019.12.09 =
* Fix   - Inventory changes through payments and refunds from other gateways not reflected on Square.
* Fix   - Fatal error on versions of WooCommerce before 4.3.
* Fix   - Sandbox API calls by passing is_sandbox flag to the Gateway API.
* Fix   - Quick edit view when editing a variable product without all variations SKU.
* Fix   - Verify if the product can be synced with Square before enabling sync when bulk/quick updating.
* Fix   - Disable sync for products that should not be synced after a REST API update.
* Fix   - Unable to create products during import.
* Fix   - Product inventory sync issue when WooCommerce is set as the Source of Record.
* Fix   - Inventory not updated when purchased through another gateway.
* Fix   - Category and description data not updated in a sync from Square.
* Fix   - Transactions on multiple stores connected to the same Square account would appear to succeed without actually charging the customer.
* Fix   - When making multiple partial refunds on the same order, only the first one would work.
* Tweak - Include product ID on failed sync record message.
* Tweak - Remove notices for refresh token when sandbox is enabled.
* Tweak - Prevent refreshing a token token when sandbox is enabled.

= 2.0.7 - 2019.11.18 =
* Fix   - No longer automatically disconnect on unexpected authorization errors
* Fix   - Bump compatibility for WooCommerce 3.8 and WordPress 5.3
* Fix   - Correct cents rounding that was causing invalid value errors
* Fix   - Fix encrypted token handling
* Fix   - No longer call revoke when disconnecting - just disconnect the site

= 2.0.6 - 2019.11.07 =
* Fix   - Access token renewal schedule action duplication.

= 2.0.5 - 2019.10.16 =
* Fix   - Access token renewal by adding support for refresh tokens as per the new Square API
* Fix   - Variable pricing import and adding an alert when these type of products are ignored.
* Fix   - Line item discounts and other adjustments being ignored.
* Tweak - Add a notice when a refresh token is not present to warn users to re-connect their accounts.
* Feature - Added support for Sandbox accounts.

= 2.0.4 - 2019.09.03 =
* Fix - Add adjustments to Square order in the event of discrepancy with WooCommerce total

= 2.0.3 - 2019.08.19 =
* Tweak - Re-introduce the "inventory sync" toggle to allow syncing product data without affecting inventory
* Fix - Adjust v1 upgrades to properly toggle inventory sync when not enabled in v1
* Fix - Ensure product prices are correctly converted to and from cents regardless of the decimal place setting
* Fix - Don't block the product stock management UI when product sync is disabled
* Fix - Ensure products that have multiple attributes that aren't used for variations can be synced
* Misc - Add support for WooCommerce 3.7

= 2.0.2 - 2019.08.13 =
* Tweak – WC 3.7 compatibility.

= 2.0.1 - 2019.07.23 =
* Fix - Don't display the "unsupported" payment processing admin notice for UK-based merchants

= 2.0.0 - 2019.07.22 =
* Feature - Support Square customer profiles for saved payment methods
* Feature - Customers can label their saved payment methods for easy identification when choosing how to pay
* Feature - Support enhanced payment form with auto formatting and retina card icons
* Feature - Show detailed decline messages when possible in place of generic errors
* Feature - Add support for WooCommerce Subscriptions
* Feature - Add support for WooCommerce Pre-Orders
* Feature - Orders with only virtual items can force a charge instead of authorization
* Feature - Void authorizations from WooCommerce
* Feature - Itemize Square transactions for improved reporting in Square
* Feature - Add sync records to notify admins of failed product syncs
* Feature - Changed "Synced with Square" option while bulk editing products
* Tweak - Introduce "System of Record" settings to control product data sync
* Tweak - Remove items from Square locations when deleted in WooCommerce (if WC is the system of record)
* Tweak - Allow users to hide WooCommerce products if removed from the linked Square location (if Square is the system of record)
* Tweak - Import images from Square when not set in WooCommerce (if Square is the system of record)
* Tweak - Remove Square postcode field when a postcode can be used from the checkout form
* Fix - Ensure connection tokens are refreshed ahead of expiration
* Fix - Always ensure settings are displayed in multisite
* Fix - Ensure Square prices update WooCommerce regular price, not sale price
* Fix - Remove usages of `$HTTP_RAW_POST_DATA`, which is deprecated
* Fix - Do not allow multiple sync processes to run simultaneously
* Fix - Avoid submitting duplicate orders with Checkout for WC plugin
* Misc - Upgrade to Square Connect v2 APIs
* Misc - Background process product sync for improved scalability
* Misc - Refactor for other miscellaneous fixes and improved reliability

= 1.0.38 - 2019-07-05 =
* Fix - Re-deploy due to erroneous inclusion of trunk folder

= 1.0.37 – 2019-04-16 =
* Fix – Use correct assets loading scheme.

= 1.0.36 – 2019-04-15 =
* Tweak – WC 3.6 compatibility.

= 1.0.35 - 2019-02-01 =
* Fix - Idempotency key reuse issue when checking out.

= 1.0.34 - 2018-11-07 =
* Update - Fieldset tag to div tag in payment box to prevent unwanted styling.
* Fix - Provide unique idempotency ID to the order instead of random unique number.
* Update - WP tested up to version 5.0

= 1.0.33 - 2018-09-27 =
* Update - WC tested up to version 3.5

= 1.0.32 - 2018-08-23 =
* Fix - UK/GB localed does not support Diners/Discover, so do not show these brands on checkout.

== Upgrade Notice ==

= 1.0.25 =
* Public Release!
