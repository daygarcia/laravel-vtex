<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Keys      
    |--------------------------------------------------------------------------
    |
    | 
    | VTEX API docs.:
    | https://developers.vtex.com/vtex-rest-api/docs/
    |
    */

    'app_token'     => env('VTEX_APP_TOKEN'),
    'app_key'       => env('VTEX_APP_KEY'),
    'store_name'    => env('VTEX_STORE_NAME'),
    'local'         => env('VTEX_LOCAL', true),

    'env' => [
        'prod'      => 'vtexcommercestable',
        'local'     => 'vtexlocal',
    ],
];
