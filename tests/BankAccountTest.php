<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class BankAccountTest extends TestCase {

    public function testGetDecimalToRoman(): void
    {
        $roman = new BankAccount();
        $this->assertEquals("", $roman->getRoman(0));
        $this->assertEquals("I", $roman->getRoman(1));
        $this->assertEquals("II", $roman->getRoman(2));
        $this->assertEquals("III", $roman->getRoman(3));
        $this->assertEquals("IV", $roman->getRoman(4));
        $this->assertEquals("V", $roman->getRoman(5));
        $this->assertEquals("VI", $roman->getRoman(6));
        $this->assertEquals("VII", $roman->getRoman(7));
        $this->assertEquals("VIII", $roman->getRoman(8));
        $this->assertEquals("IX", $roman->getRoman(9));
        $this->assertEquals("X", $roman->getRoman(10));
    }
}