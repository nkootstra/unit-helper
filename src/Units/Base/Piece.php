<?php


namespace Nkootstra\UnitConversion\Units\Base;


use Nkootstra\UnitConversion\Units\BaseUnit;

class Piece extends BaseUnit
{
    public function __construct($quantity = 1)
    {
        parent::__construct($quantity);
    }
}
