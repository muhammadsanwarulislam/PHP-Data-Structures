<?php

class PracticeWithArray {
    public $numericArray            = [];
    public $multiDimensionalArray   = [];
    public $associativeArrayForInfo = [];
    public $num;

    public function __construct($numericArray, $multiDimensionalArray, $associativeArrayForInfo, $num)
    {
        $this->numericArray             =   $numericArray;
        $this->multiDimensionalArray    =   $multiDimensionalArray;
        $this->associativeArrayForInfo  =   $associativeArrayForInfo;
        $this->num                      =   $num;
    }

    public function outputOfTheNumericArray(): PracticeWithArray
    {
        foreach($this->numericArray as $key => $number){
            echo "The position " .$key. " holds the value " .$number. "\n";
        }
        return $this;
    }

    public function outputOfTheMultiDimensionalArray(): PracticeWithArray 
    {
        foreach($this->multiDimensionalArray as $key => $values) {
            echo "Info of the player # ".($key + 1). "\n";
            foreach($values as $index => $info){
                echo $index . " : " .$info. "\n";
            }
            echo "\n";
        }
        return $this;
    }

    public function outputOfAssociativeArray(): PracticeWithArray
    {
        foreach($this->associativeArrayForInfo as $index => $info) {
            echo $index." : ".$info."\n";
        }
        return $this;
    }

    public function intToRoman(): PracticeWithArray
    {
        $result = '';
        $roman = [
            'M'  => 1000,
            'CM' => 900,
            'D'  => 500,
            'CD' => 400,
            'C'  => 100,
            'XC' => 90,
            'L'  => 50,
            'XL' => 40,
            'X'  => 10,
            'IX' => 9,
            'V'  => 5,
            'IV' => 4,
            'I'  => 1,
        ];
        foreach($roman as $k => $v){
            while(!($this->num - $v < 0)){
                $this->num = $this->num - $v;
                $result .= $k;
            }
        }
        echo "Converted Roman Number is:"." ".$result;
        return $this;
    }
}
