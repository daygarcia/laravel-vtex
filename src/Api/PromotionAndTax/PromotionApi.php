<?php

namespace LaravelVtex\Api\PromotionAndTax;

use LaravelVtex\Api;
use LaravelVtex\Configuration;

class PromotionApi extends Api
{
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
        parent::__construct();
    }

    public function getAllPromotions()
    {
        $url = 'rnb/pvt/benefits/calculatorconfiguration';
        return $this->get($this->configuration, $url);
    }
}
