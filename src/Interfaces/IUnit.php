<?php


namespace Nkootstra\UnitConversion\Interfaces;


interface IUnit
{
    public function __construct($quantity=1);

    public function getQuantity() : float;

    public function getName() : string;
}
