<?php


namespace Nkootstra\UnitHelper\Interfaces;


interface IUnit
{
    public function __construct($quantity=1);

    public function getQuantity();

    public function getName();
}
