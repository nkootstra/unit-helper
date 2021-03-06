<?php

use Nkootstra\UnitHelper\Units\Volume\{Liter,MilliLiter,CentiLiter};
use Nkootstra\UnitHelper\Units\Mass\{Gram,KiloGram,MetricTon,MilliGram};


return [
    // volume
    Liter::class => [
        'l','liter','litre'
    ],
    MilliLiter::class => [
        'ml','millilitre','milliliter'
    ],
    CentiLiter::class => [
        'cl','centiliter','centilitre'
    ],
    // mass
    Gram::class => [
        'gram','gr','g'
    ],
    KiloGram::class => [
        'kilogram','kilo','kg'
    ],
    MetricTon::class => [
        'ton','t'
    ],
    MilliGram::class => [
        'milligram',
        'mg'
    ]
];
