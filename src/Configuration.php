<?php


namespace LaravelVtex;

class Configuration
{
    private $app_key;
    private $app_token;
    private $store_name;

    public function __construct(array $config)
    {
        $this->app_key = $config['app_key'] ?? null;
        $this->app_token = $config['app_token'] ?? null;
        $this->store_name = $config['store_name'] ?? null;
    }

    public function setAppKey(string $app_key): void
    {
        $this->app_key = $app_key;
    }

    public function getAppKey(): string
    {
        return $this->app_key;
    }

    public function setAppToken(string $app_token): void
    {
        $this->app_token = $app_token;
    }

    public function getAppToken(): string
    {
        return $this->app_token;
    }

    public function setStoreName(string $store_name): void
    {
        $this->store_name = $store_name;
    }

    public function getStoreName(): string
    {
        return $this->store_name;
    }
}
