<?php

namespace LaravelVtex\Api\Catalog;

use LaravelVtex\Api;
use LaravelVtex\Configuration;
use Models\Catalog\GetProductsFromACollection;

class CollectionBetaApi extends Api
{
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
        parent::__construct();
    }

    public function getProductsFromACollection(string $id)
    {
        $url = "catalog/pvt/collection/{$id}/products";
        return $this->get($this->configuration, $url);
    }
}
