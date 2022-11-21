<?php

namespace LaravelVtex\Api\Catalog;

use LaravelVtex\Api;
use LaravelVtex\Configuration;

class CollectionBetaApi extends Api
{
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getProductsFromACollection(string $id, string $page, string $page_size, string $filter, bool $active, bool $visible, int $category_id, int $brand_id, int $supplier_id, int $sales_channel_id, string $release_from, string $release_to, string $specification_product, int $specification_field_id)
    {
        $url = "catalog/pvt/collection/{$id}/products?page={$page}&pageSize={$page_size}";
        return $this->get($this->configuration, $url);
    }
}
