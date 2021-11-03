<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class DecimalToRomanTest extends TestCase {

    public function testGetDecimalToRoman(): void
    {
        $roman = new DecimalToRoman();
        $this->assertEquals("", $roman->getRoman(0));    }
}