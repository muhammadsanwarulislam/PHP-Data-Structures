<?php

class PracticeWithArray {
    public $numericArray            = [];
    public $multiDimensionalArray   = [];
    public $associativeArrayForInfo = [];

    public function __construct($numericArray, $multiDimensionalArray, $associativeArrayForInfo)
    {
        $this->numericArray             =   $numericArray;
        $this->multiDimensionalArray    =   $multiDimensionalArray;
        $this->associativeArrayForInfo  =   $associativeArrayForInfo;
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
}