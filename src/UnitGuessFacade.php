<?php

namespace Nkootstra\UnitConversion;

use Illuminate\Support\Facades\Facade;

class UnitGuessFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'unit-guess';
    }
}
