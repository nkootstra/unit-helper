<?php


namespace Nkootstra\UnitHelper\Tests\Guess;

use Nkootstra\UnitHelper\UnitGuess;
use Nkootstra\UnitHelper\Units\Base\Piece;
use Nkootstra\UnitHelper\Units\Mass\Gram;
use Nkootstra\UnitHelper\Units\Volume\Liter;
use PHPUnit\Framework\TestCase;

class UnitGuessTest extends TestCase
{
    public function test_if_non_existing_unit_fails()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Unit is not an instance of BaseUnit');

        $guess = new UnitGuess("2 liter");

        $guess->guess(NotAnActualUnit::class);
    }

    public function test_guess_basic_string()
    {
        $guess = new UnitGuess("2 l");

        $unit = $guess->guess(Piece::class);

        $this->assertEquals(2, $unit->getQuantity());
        $this->assertInstanceOf(Liter::class, $unit);
        $this->assertEquals("Liter", $unit->getName());
    }

    public function test_guess_complex_string_with_multiplication_sign()
    {
        $guess = new UnitGuess("2 * 2 l");

        $unit = $guess->guess(Piece::class);

        $this->assertInstanceOf(Liter::class, $unit);
        $this->assertEquals(4, $unit->getQuantity());
        $this->assertEquals("Liter", $unit->getName());
    }

    public function test_guess_complex_string_with_x()
    {
        $guess = new UnitGuess("2 x 2 l");

        $unit = $guess->guess(Piece::class);

        $this->assertInstanceOf(Liter::class, $unit);
        $this->assertEquals(4, $unit->getQuantity());
        $this->assertEquals("Liter", $unit->getName());
    }

    public function test_ca_100_gram()
    {
        $guess = new UnitGuess("ca. 110 g");

        $unit = $guess->guess(Piece::class);

        $this->assertInstanceOf(Gram::class, $unit);
        $this->assertEquals(110, $unit->getQuantity());
        $this->assertEquals("Gram", $unit->getName());
    }

    public function test_0_dot_33_liter()
    {
        $guess = new UnitGuess("0,33 l");

        $unit = $guess->guess(Piece::class);

        $this->assertInstanceOf(Liter::class, $unit);
        $this->assertEquals(0.33, $unit->getQuantity());
        $this->assertEquals("Liter", $unit->getName());

    }

}
