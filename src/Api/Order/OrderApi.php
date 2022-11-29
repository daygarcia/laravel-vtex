<?php

namespace LaravelVtex\Api\Order;

use LaravelVtex\Api;
use LaravelVtex\Configuration;

class OrderApi extends Api
{
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
        parent::__construct();
    }

    public function listOrders(array $params = [])
    {
        $url = 'oms/pvt/orders';
        return $this->get($this->configuration, $url, $params);
    }

    public function getOrder(string $order_id)
    {
        $url = "oms/pvt/orders/{$order_id}";
        return $this->get($this->configuration, $url);
    }
}
