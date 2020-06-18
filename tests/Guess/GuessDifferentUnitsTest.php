<?php


namespace Nkootstra\UnitHelper\Tests\Guess;


use Nkootstra\UnitHelper\UnitGuess;
use Nkootstra\UnitHelper\Units\Base\Piece;
use Nkootstra\UnitHelper\Units\Volume\CentiLiter;
use Nkootstra\UnitHelper\Units\Volume\Liter;
use Nkootstra\UnitHelper\Units\Volume\MilliLiter;
use PHPUnit\Framework\TestCase;

class GuessDifferentUnitsTest extends TestCase
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
