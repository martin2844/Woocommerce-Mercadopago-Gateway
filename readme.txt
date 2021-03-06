=== Checkout Gateway for Mercadopago and WooCommerce ===
Donate link: https://github.com/macr1408
Contributors: Marcos
Tags: mercadopago, payments, creditcard, gateway
Requires at least: 4.8
Tested up to: 5.3.2
Requires PHP: 7.0
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
 
Plugin to connect MercadoPago's Gateway checkout with WooCommerce

== Description ==

With this plugin you can easily integrate your WooCommerce store with MercadoPago using the Gateway mode, which allows your customers to make payments with exclusive installments for each card.

In the case of Argentina, it enables the option to pay with more than 12 installments, so your customers will be able to pay using Ahora 12, and Ahora 18.

This plugin has an innovative, elegant and visually attractive way to capture your customers' data through a 3D card that is completed with the card's data in real time, increasing your site's conversion rate and decreasing failed purchases.

In addition, there is also support for Aggregator mode! which is the "common" alternative to the Gateway mode, that is, if in your MercadoPago account you do not already have the Gateway mode enabled, or if it is disabled for any reason, the plugin works with the Aggregator mode, so you can continue to operate regularly with no downtime.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/woo-mercadopago-gateway` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Use the Settings->MercadoPago Gateway Checkout screen to configure the plugin

== Frequently Asked Questions ==

= Does this plugin connect only with Gateway mode? =

No, this plugin also can connect with the Agreggator mode, so it uses both Gateway and Aggregator mode

= How can I use Aggregator mode instead of Gateway mode? =

Aggregator mode enables automatically when the Gateway mode isn't available by default. This is the default behavior and there is no way to change it.

= Can I use this plugin together with the MercadoPago offical plugin (or any other similar plugin)? =

Yes sure, this plugin is standalone and can work together with any plugin.

== Screenshots ==

1. More than 12 installments, including bank promotions
2. Shows CFT and TEA of the installment selected
3. Interactive card working in real time
4. Works with multiple cards issuers
5. Settings sample

== Changelog ==

= 1.3.2 =
Fix bug where price was not being calculated correctly for guest customers

= 1.3.1 =
Fix bug with method id preventing the ability to enable or disable the payment method

= 1.3 =
Fix versioning and updated wordpress compatibility

= 1.2.1 =
Fix js bug, add security to ajax call

= 1.2.0 =
Fix price not calculating correctly when getting installments

= 1.1.0 =
Fix JS broken in checkout with Ajax

= 1.0 =
First release

== Upgrade Notice ==

= 1.0 =
First release
