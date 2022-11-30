<?php

namespace LaravelVtex\Api\PromotionAndTax;

use LaravelVtex\Api;
use LaravelVtex\Configuration;

class PromotionOrTaxApi extends Api
{
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
        parent::__construct();
    }

    public function getPromotionOrTaxById(string $id_calculator_configuration)
    {
        $url = "rnb/pvt/calculatorconfiguration/{$id_calculator_configuration}";
        return $this->get($this->configuration, $url);
    }
}
