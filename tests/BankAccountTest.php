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
    }
}