<?php
function bubbleSort(array $arr): array{
  $count = 0;
  $len = sizeof($arr);
  for ($i=0; $i < $len; $i++) {
    for ($j=0; $j < $len - 1; $j++) {
      $count ++;
      if($arr[$j] > $arr[$j+1]) {
        $tmp = $arr[$j + 1];
        $arr[$j + 1] = $arr[$j];
        $arr[$j] = $tmp;
        print_r($arr);
      }
    }
  }
  echo $count. "\n";
  return $arr;
}

$arr = [10,8,3,2];
$sortedArray = bubbleSort($arr);
echo implode(',', $sortedArray);
