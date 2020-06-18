<?php

namespace Nkootstra\UnitConversion;

use ChrisKonnertz\StringCalc\StringCalc;
use Illuminate\Support\Str;
use Nkootstra\UnitConversion\Interfaces\IUnit;
use Nkootstra\UnitConversion\Units\Base\Piece;
use Nkootstra\UnitConversion\Units\BaseUnit;

class UnitGuess
{
    private $input;

    public function __construct(string $input)
    {
        $this->input = $input;
    }

    /**
     * @throws \Exception
     * @param string $default
     * @return IUnit
     */
    public function guess($default = Piece::class) : IUnit
    {
        if(!new $default instanceof BaseUnit)
        {
            throw new \Exception('Unit is not an instance of BaseUnit');
        }

        $quantity = $this->getQuantityString();

        return $this->getUnitByAbbreviation($quantity, $default);
    }

    private function getQuantityString()
    {
        // remove unit
        //$quantity = preg_filter('/[^\d\s+x*.,]+/','',$this->input);
        preg_match_all('/(?:[0-9]+[.,]?|[x+*])/',$this->input,$matches);
        $quantity = implode('',$matches[0]);

        if(empty(trim($quantity))) return 1;

        return $quantity;
    }

    private function getUnitByAbbreviation($quantity, $default) : IUnit
    {
        $units = include(__DIR__.'/config/units.php');

        $unit = trim(str_replace($quantity,'',$this->input));

        // convert $quantity string so we can calculate the outcome
        $quantity = str_replace('x','*', $quantity);
        $quantity = str_replace(',','.', $quantity);
        $calculatedQuantity = (new StringCalc)->calculate($quantity);

        $array = explode(' ', $unit); // only use the last word or letter
        $unit = array_pop($array);
        foreach($units as $key => $u)
        {
            if(in_array($unit, $u))
            {
                return new $key($calculatedQuantity);
            }
        }

        return new $default($calculatedQuantity);
    }
}
