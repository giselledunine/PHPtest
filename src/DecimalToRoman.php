<?php declare(strict_types=1);

class DecimalToRoman
{
protected string $roman;

    public function __construct()
    {
        $this->roman = "";
    }

    public function getRoman(int $number): DecimalToRoman
    {
        if($number === 0){
            return $this->roman;
        }
    }
}