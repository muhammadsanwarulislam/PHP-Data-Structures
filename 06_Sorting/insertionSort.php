<?php
function insertionSort(array &$arr) {
  $len = sizeof($arr);
  for ($i=0; $i < $len; $i++) {
    $key = $arr[$i];
    $j = $i - 1;

    while ($j >= 0 && $arr[$j] > $key) {
      $arr[$j+1] = $arr[$j];
	    $j--;
    }
    $arr[$j+1] = $key;
  }
}

$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];

insertionSort($arr);
echo implode(",", $arr);
