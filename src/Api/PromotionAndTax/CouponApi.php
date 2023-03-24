<?php

namespace LaravelVtex\Api\PromotionAndTax;

use LaravelVtex\Api;
use LaravelVtex\Configuration;

class CouponApi extends Api
{
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
        parent::__construct();
    }

    public function getAllCoupons()
    {
        $url = 'rnb/pvt/coupon';
        return $this->get($this->configuration, $url);
    }

    public function archiveCouponByCouponCode(string $coupon_code)
    {
        $url = "rnb/pvt/archive/coupon/{$coupon_code}";
        return $this->post($this->configuration, $url, []);
    }

    public function getCouponUsage(string $coupon_code)
    {
        $url = "rnb/pvt/coupon/usage/{$coupon_code}";
        return $this->get($this->configuration, $url);
    }
}
