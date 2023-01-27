<?php

class PracticeWithArray {
    public $numericArray            = [];
    public $multiDimensionalArray   = [];
    public $associativeArrayForInfo = [];
    public $num;
    public $combinationOfParenthesis;

    public function __construct($numericArray, 
                                $multiDimensionalArray, 
                                $associativeArrayForInfo, 
                                $num, 
                                $combinationOfParenthesis
                                )
    {
        $this->numericArray             =   $numericArray;
        $this->multiDimensionalArray    =   $multiDimensionalArray;
        $this->associativeArrayForInfo  =   $associativeArrayForInfo;
        $this->num                      =   $num;
        $this->combinationOfParenthesis =   $combinationOfParenthesis;
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

    public function generateParenthesis(): PracticeWithArray
    {
        $arr = [];
        $this->parenthesisMaker($arr, "", $this->combinationOfParenthesis, $this->combinationOfParenthesis);
        print_r($arr);
        return $this;
    }

    public function parenthesisMaker(&$arr, $current, $open, $close)
    {
        if($open == 0 && $close == 0) array_push($arr, $current);
        if($open > $close) return NULL;
        if($open > 0) $this->parenthesisMaker($arr, $current.'(', $open-1, $close);
        if($close > 0) $this->parenthesisMaker($arr, $current.')', $open, $close-1);
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
