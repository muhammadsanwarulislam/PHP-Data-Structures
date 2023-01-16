<?php
/* 
 * Example code for: Multi Dimensional Array
 * 
 * Author: Muhammad Sanwarul Islam <muhammad.sanwarul94@gmail.com>
 * 
 */

$players    = [];
$players[]  = ['name' => 'Ronaldo', 'Age' => 37, 'country' => 'Portugal'];
$players[]  = ['name' => 'Messi', 'Age' => 35, 'country' => 'Argentina'];
$players[]  = ['name' => 'Neymer', 'Age' => 28, 'country' => 'Brazil'];

foreach($players as $key => $playersInfo) {
    echo "Info of the player # ".($key + 1). "\n";
    foreach($playersInfo as $index => $info){
        echo $index . " : " .$info. "\n";
    }
    echo "\n";
}
