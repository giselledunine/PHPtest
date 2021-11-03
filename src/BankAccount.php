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
        }
        if($number <=3 && $number > 0) {
            $this->roman = str_repeat('I', $number);
            return $this->roman;
        }
    }
}