<?php

namespace Nkootstra\UnitConversion\Tests;

use Nkootstra\UnitConversion\UnitConversionFacade;
use Nkootstra\UnitConversion\UnitConversionServiceProvider;
use Nkootstra\UnitConversion\UnitGuessFacade;
use Orchestra\Testbench\TestCase as ParentTestCase;

class BaseTestCase extends ParentTestCase
{
    protected function getPackageProviders($app)
    {
        return [UnitConversionServiceProvider::class];
    }

    /**
     * Load package alias
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'UnitConversion'    => UnitConversionFacade::class,
            'UnitGuess'         => UnitGuessFacade::class,
        ];
    }
}
