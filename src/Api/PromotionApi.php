<?php

namespace LaravelVtex\Api;

use LaravelVtex\Api;
use LaravelVtex\Configuration;

class PromotionApi extends Api
{
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getItems(array|string $ids, array $attributes = [])
    {
        $ids = is_array($ids) ? implode(',', $ids) : $ids;
        $url = 'items?ids=' .  $ids . '&attributes=' . implode(',', $attributes);
        return $this->get($this->configuration->getAccessToken(), $url);
    }

    public function getItem(String $itemId)
    {
        $url = 'items/' . $itemId;
        return $this->get($this->configuration->getAccessToken(), $url);
    }

    public function getSellerItems(Int $user_id, $search_type = null)
    {
        $url = "users/${user_id}/items/search?search_type={$search_type}";
        return $this->get($this->configuration->getAccessToken(), $url);
    }

    public function getItemShippingOptions(String $itemId)
    {
        $url = "items/${itemId}/shipping_options";
        return $this->get($this->configuration->getAccessToken(), $url);
    }

    public function createItem(array $item)
    {
        $url = 'items';

        $response = $this->post($this->configuration->getAccessToken(), $url, $item);

        $this->createItemDescription($response->id, $item['description']);

        return $response;
    }

    public function createItemDescription(String $itemId, string $description)
    {
        $url = "items/${itemId}/description";
        return $this->post($this->configuration->getAccessToken(), $url, ['plain_text' => $description]);
    }
}
