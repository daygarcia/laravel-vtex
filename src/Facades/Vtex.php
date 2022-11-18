<?php

namespace LaravelVtex\Facades;

use \Illuminate\Support\Facades\Facade;

class Vtex extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'vtex';
    }
}
