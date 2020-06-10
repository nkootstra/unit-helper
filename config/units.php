<?php

/*
 * You can place your custom package configuration in here.
 */

use Nkootstra\UnitConversion\Units\Volume\{Liter, MilliLiter};

return [
    Liter::class => [
        'l','liter','litre'
    ],
    MilliLiter::class => [
        'ml','millilitre','milliliter'
    ]
];
