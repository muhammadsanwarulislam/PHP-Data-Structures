<?php
/* 
 * Example code for: Array OPP
 * 
 * Author: Muhammad Sanwarul Islam <muhammad.sanwarul94@gmail.com>
 * 
 */

include_once '../OPP/PracticeWithArray.php';

$numeric = [1,2,5,8,45];

$associativeArrayForInfo = [];
$associativeArrayForInfo['name']    = 'muhammad';
$associativeArrayForInfo['email']   = 'muhammad@gmail.com';
$associativeArrayForInfo['id']      =  '143311010';

$multiDimensional    = [];
$multiDimensional[]  = ['name' => 'Ronaldo', 'Age' => 37, 'country' => 'Portugal'];
$multiDimensional[]  = ['name' => 'Messi', 'Age' => 35, 'country' => 'Argentina'];
$multiDimensional[]  = ['name' => 'Neymer', 'Age' => 28, 'country' => 'Brazil'];

$num = 3;

$combinationOfParenthesis = 3;

$className = 'PracticeWithArray';

//Using method chaining
$objOfArrayClass = (new $className($numeric,$multiDimensional, $associativeArrayForInfo,$num, $combinationOfParenthesis))
                    ->outputOfTheNumericArray()
                    ->outputOfTheMultiDimensionalArray()
                    ->outputOfAssociativeArray()
                    ->generateParenthesis()
                    ->intToRoman();

