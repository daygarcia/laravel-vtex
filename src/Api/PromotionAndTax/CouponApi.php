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
}
