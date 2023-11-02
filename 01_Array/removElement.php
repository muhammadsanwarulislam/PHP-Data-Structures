<?php
/**
 * Given an integer array nums and an integer val, remove all occurrences of val in nums in-place. 
 * The order of the elements may be changed. Then return the number of elements in nums which are not equal to val.
 */

 function removeElement(&$nums, $val) {
    $count = 0;
    for($i = 0; $i < count($nums); $i++) {
        if($nums[$i] != $val) {
            $nums[$count] = $nums[$i];
            $count++;
        }
    }
    return $count;
 }

 $nums = [3,2,2,3];
 $val = 3;
 print_r(removeElement($nums,$val));