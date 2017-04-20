<?php

namespace FFFFM\Theme;

class Stripe
{
    public function __construct()
    {
        add_shortcode('stripe_donate', [$this, 'stripeDonateShortcode']);
    }

    public function stripeDonateShortcode($attributes)
    {
        if (!function_exists('hg_stripe_donate_shortcode')) {
            return '';
        }

        $return = hg_stripe_donate_shortcode($attributes);

        $return = preg_replace(
            '~handler_(\w+)\.open\(\{~i',
            'handler_$1.open({billingAddress:true,',
            $return
        );

        return $return;
    }
}
