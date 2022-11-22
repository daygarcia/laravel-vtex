<?php

namespace LaravelVtex\Api\PromotionAndTax;

use LaravelVtex\Api;
use LaravelVtex\Configuration;

class CampaignAndAudienceApi extends Api
{
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
        parent::__construct();
    }

    public function getAllCampaignAudiences()
    {
        $url = 'rnb/pvt/campaignConfiguration';
        return $this->get($this->configuration, $url);
    }

    public function getPromotionOrTaxId(string $id_calculator_configuration)
    {
        $url = "rnb/pvt/calculatorconfiguration/{$id_calculator_configuration}";
        return $this->get($this->configuration, $url);
    }
}
