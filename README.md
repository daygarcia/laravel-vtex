# VTEX Laravel

<h4>A package to connect to VTEX API</h4>

## Requirements

PHP 8 and later

## Installation & Usage

### Composer

To install via [composer](http://getcomposer.org/):

```
composer require daygarcia/laravel-vtex
```

## Setup

The `Configuration` constructor takes a single argument: an array containing all configuration needed to connect to VTEX API:

```php
<?php

// Still under development

use Illuminate\Http\Request;
use LaravelVtex\Configuration;

...

$config = new Configuration([
    'app_token'   => config('vtex.app_token'),
    'app_key'     => config('vtex.app_key'),
    'store_name'  => config('vtex.store_name')
]);


```

Getter and setter methods are available for the `Configuration` class. You can directly get and set `app_token`, `app_key` and `store_name`


## Example

```php
<?php

use LaravelVtex\Configuration;
use LaravelVtex\Api\PromotionApi;

...

public function index(Request $request)
{
    $config = new Configuration([
        'app_token'   => config('vtex.app_token'),
        'app_key'     => config('vtex.app_key'),
        'store_name'  => config('vtex.store_name')
    ]);

    try {
        $vtex = new PromotionAndTaxesApi($config);
        $response = $vtex->getAllPromotions();

        return $this->success($response);
    } catch (Exception $e) {
        return $this->error($e->getMessage(), $e->getCode());
    }
}


```

## Documentation & Important notes

##### Don’t forget to check out VTEX developer website [developer site](https://developers.vtex.com/vtex-rest-api/docs/getting-started-list-of-rest-apis)

## TODO
- [ ] Improve error handling
