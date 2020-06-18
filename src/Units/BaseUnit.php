<?php


namespace Nkootstra\UnitHelper\Units;


use Nkootstra\UnitHelper\Interfaces\IUnit;

abstract class BaseUnit implements IUnit
{
    private $quantity;

    public function __construct($quantity = 1)
    {
        $this->quantity = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getName()
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}
