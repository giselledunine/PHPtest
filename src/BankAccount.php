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
        if($number === 4){
            $this->roman = "IV";
            return $this->roman;
        }
        if($number === 5){
            $this->roman = "V";
            return $this->roman;
        }
        if($number >= 6 && $number <= 8 ) {
            $this->roman = "V".str_repeat('I', $number-5);
            return $this->roman;
        }

        if($number === 9){
            $this->roman = "IX";
            return $this->roman;
        }
        if($number === 10){
            $this->roman = "IX";
            return $this->roman;
        }
    }
}