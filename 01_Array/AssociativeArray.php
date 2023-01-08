<?php
/* 
 * Example code for: Associative Array
 * 
 * Author: Muhammad Sanwarul Islam <muhammad.sanwarul94@gmail.com>
 * 
 */

$studentInforamtions            = [];
$studentInforamtions['name']    = 'muhammad';
$studentInforamtions['contact'] = '017455555';
$studentInforamtions['email']   = 'muhammad@gmail.com';

foreach($studentInforamtions as $key => $stdInfo) {
    echo $key. " : " .$stdInfo. "\n"; 
}