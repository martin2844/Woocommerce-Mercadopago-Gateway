<?php

namespace Macr1408\MPGatewayCheckout\Helper;

trait SettingsTrait
{
    public static function get_option(string $key, $default = false)
    {
        return get_option('wc-mp-gateway-checkout-' . $key, $default);
    }
}
