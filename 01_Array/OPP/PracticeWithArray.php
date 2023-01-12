<?php

class PracticeWithArray {
    public $numericArray = [];
    public $multiDimensionalArray = [];

    public function __construct($numericArray, $multiDimensionalArray)
    {
        $this->numericArray             =   $numericArray;
        $this->multiDimensionalArray    =   $multiDimensionalArray;
    }

    public function outputOfTheNumericArray() {
        foreach($this->numericArray as $key => $number){
            echo "The position " .$key. " holds the value " .$number. "\n";
        }
    }

    public function outputOfTheMultiDimensionalArray() {
        
        foreach($this->multiDimensionalArray as $key => $values) {
            echo "Info of the player # ".($key + 1). "\n";
            foreach($values as $index => $info){
                echo $index . " : " .$info. "\n";
            }
            echo "\n";
        }
    }
}