<?php

namespace Nkootstra\UnitConversion2\Tests;

use Orchestra\Testbench\TestCase;
use Nkootstra\UnitConversion2\UnitConversion2ServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [UnitConversion2ServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
