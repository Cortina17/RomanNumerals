<?php

namespace App;

class Number
{
    public function __construct()
    {
        $this->rate = [
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1
        ];
    }

    public $rate = [];
    
    public function toRoman($number)
    {
        $returnRoman = '';

        while ($number > 0) {
            foreach ($this->rate as $roman => $value) {
                if ($number >= $value) {
                    $number -= $value;
                    $returnRoman .= $roman;
                    break;
                }
            }
        }
        
        return $returnRoman;
    }
}

// $pepe = new Number;
// echo $pepe->toRoman(3);