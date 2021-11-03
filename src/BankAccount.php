<?php declare(strict_types=1);

class BankAccount
{
protected string $roman;

    public function __construct()
    {
        $this->roman = "";
    }

    public function getRoman(int $number): string
    {
        if($number === 0){
            return $this->roman;
        }else if ($number === 1) {
            $this->roman = "I";
            return $this->roman;
        }else if ($number === 2) {
            $this->roman = "II";
            return $this->roman;
        }else if ($number === 3) {
            $this->roman = "III";
            return $this->roman;
        }
    }
}