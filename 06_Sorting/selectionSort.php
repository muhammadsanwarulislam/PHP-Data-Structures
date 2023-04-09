<?php
function selectionSort(array $arr): array {
  $len = sizeof($arr);
  for($i = 0; $i < $len; $i++) {
    $min = $i;
    for($j = $i + 1; $j < $len; $j++) {
      if($arr[$j] < $arr[$min]) {
        $min = $j;
      }
    }
    if($min != $i) {
      $tmp = $arr[$i];
      $arr[$i] = $arr[$min];
      $arr[$min] = $tmp;
    }
  }
  return $arr;
}

$arr = [10,54,3,8,7,45];
selectionSort($arr);
echo implode(",", $arr);
