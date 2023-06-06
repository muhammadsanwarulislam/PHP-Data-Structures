<?php

function reverseString(&$str) {
    $lastChar = count($str) - 1;
    for($i = 0; $i < $lastChar; $i++){
        $tmp = $str[$i];
        $str[$i] = $str[$lastChar];
        $str[$lastChar] = $tmp;
        $lastChar--;
    }
    return $str;
}

$str = ["h","e","l","l","o"];
print_r(reverseString($str));