<?php

namespace LaravelVtex;

use Illuminate\Support\Facades\Http;
use LaravelVtex\Configuration;

class Api
{
    private $headers = [
        'Accept' => 'application/vnd.vtex.ds.v10+json',
        'Content-Type' => 'Application/json',
        'REST-Range' => 'resources=0-1999',
    ];

    public function __construct()
    {
        $this->url = config('vtex.local')
            ? "https://" . config('vtex.store_name') . "." . config('vtex.env.local') . ".com.br/api/"
            : "https://" . config('vtex.store_name') . "." . config('vtex.env.prod') . ".com.br/api/";
    }

    public function get(Configuration $configuration, string $url)
    {
        return Http::withHeaders($this->headers($configuration))->get($this->url . $url)->object();
    }

    public function post(Configuration $configuration, string $url, $data)
    {
        return Http::withHeaders($this->headers($configuration))->post($this->url . $url, $data)->object();
    }

    public function put(Configuration $configuration, string $url, $data)
    {
        return Http::withHeaders($this->headers($configuration))->put($this->url . $url, $data)->object();
    }

    public function delete(Configuration $configuration, $url)
    {
        return Http::withHeaders($this->headers($configuration))->delete($this->url . $url)->object();
    }

    public function headers(Configuration $configuration)
    {
        return array_merge($this->headers, [
            'x-vtex-api-appkey' => $configuration->getAppKey(),
            'x-vtex-api-apptoken' => $configuration->getAppToken(),
        ]);
    }
}
