<?php


namespace Nkootstra\UnitHelper\Units\Base;


use Nkootstra\UnitHelper\Units\BaseUnit;

class Piece extends BaseUnit
{
    public function __construct($quantity = 1)
    {
        parent::__construct($quantity);
    }
}
