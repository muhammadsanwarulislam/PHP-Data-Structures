<?php

include_once '../OPP/PracticeWithArray.php';

$players    = [];
$players[]  = ['name' => 'Ronaldo', 'Age' => 37, 'country' => 'Portugal'];
$players[]  = ['name' => 'Messi', 'Age' => 35, 'country' => 'Argentina'];
$players[]  = ['name' => 'Neymer', 'Age' => 28, 'country' => 'Brazil'];

$objOfArrayClass = new PracticeWithArray([1,2,3,4],$players);
$objOfArrayClass->outputOfTheNumericArray();
$objOfArrayClass->outputOfTheMultiDimensionalArray();

