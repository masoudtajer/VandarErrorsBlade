<?php

namespace Masoud5070\VandarErrorsBlade\Facades;

use Illuminate\Support\Facades\Facade;

class VandarErrorsBlade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'vandarerrorsblade';
    }
}
