<?php

namespace LaravelVtex\Api\CartAttachments;

use LaravelVtex\Api;
use LaravelVtex\Configuration;

class CartApi extends Api
{
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
        parent::__construct();
    }

    public function addMarketingData(string $order_form_id, array $data)
    {
        $url = "checkout/pub/orderForm/{$order_form_id}/attachments/marketingData";
        return $this->post($this->configuration, $url, $data);
    }
}
