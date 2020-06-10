<?php


namespace Nkootstra\UnitConversion\Units;


use Nkootstra\UnitConversion\Interfaces\IUnit;

abstract class BaseUnit implements IUnit
{
    private float $quantity;

    public function __construct($quantity = 1)
    {
        $this->quantity = $quantity;
    }

    public function getQuantity() : float
    {
        return $this->quantity;
    }

    public function getName() : string
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}
