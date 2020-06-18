<?php


namespace Nkootstra\UnitConversion\Interfaces;


interface IUnit
{
    public function __construct($quantity=1);

    public function getQuantity();

    public function getName();
}
