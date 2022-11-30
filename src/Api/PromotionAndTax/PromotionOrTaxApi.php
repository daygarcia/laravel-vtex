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

    public function archivePromotionOrTax(string $id_calculator_configuration)
    {
        $url = "rnb/pvt/archive/calculatorConfiguration/{$id_calculator_configuration}";
        return $this->post($this->configuration, $url, []);
    }

    public function createOrUpdatePromotionOrTax(array $data)
    {
        $url = 'rnb/pvt/calculatorconfiguration';
        return $this->post($this->configuration, $url, $data);
    }
}
