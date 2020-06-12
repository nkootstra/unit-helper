<?php


namespace Nkootstra\UnitConversion\Tests\Guess;


use Nkootstra\UnitConversion\Tests\BaseTestCase;
use Nkootstra\UnitConversion\UnitGuess;
use Nkootstra\UnitConversion\Units\Base\Piece;
use Nkootstra\UnitConversion\Units\Volume\CentiLiter;
use Nkootstra\UnitConversion\Units\Volume\Liter;
use Nkootstra\UnitConversion\Units\Volume\MilliLiter;

class GuessDifferentUnitsTest extends BaseTestCase
{
    public function test_if_liter_is_guessed()
    {
        $guess = new UnitGuess("2.5 l");

        $unit = $guess->guess(Piece::class);

        $this->assertInstanceOf(Liter::class, $unit);
        $this->assertEquals("Liter", $unit->getName());
    }

    public function test_if_centiliter_is_guessed()
    {
        $guess = new UnitGuess("2.5 cl");

        $unit = $guess->guess(Piece::class);

        $this->assertInstanceOf(CentiLiter::class, $unit);
        $this->assertEquals("CentiLiter", $unit->getName());
    }

    public function test_if_milliliter_is_guessed()
    {
        $guess = new UnitGuess("2.5 ml");

        $unit = $guess->guess(Piece::class);

        $this->assertInstanceOf(MilliLiter::class, $unit);
        $this->assertEquals("MilliLiter", $unit->getName());
    }
}
