<?php

declare(strict_types=1);

//?ARGUMENTS AND PARAMETERS

//$x and $y are parameters
function multiple(int|float $x, int|float $y): int|float
{
    return $x * $y;
}

//5 and 10 are arguments
var_dump(multiple(5, 10)); //int(50)

//?Functions with dinamic number of arguments

/**
 * @param int|float $x First number
 * @param int|float $y Second number
 * @param int|float ...$numbers Dinamic number of numbers, must be int or float
 * 
 * @return int|float Sum of all numbers
 */
function sum(int|float $x, int|float $y, ...$numbers): int|float
{
    return array_sum([$x, $y, ...$numbers]);
}

var_dump(sum(1, 2, 3, 4, 5)); //int(15)

var_dump(sum(1, 2, 3, 4, 5, 6, 7, 8, 9, 10)); //int(55)

var_dump(sum(1, 3)); //int(4)

var_dump(sum(3.5, 2, 1.2, 2.3, 5, 5.2)); //float(18.2)


//?Functions pass parameters without order
var_dump(sum(y: 2, x: 1)); //int(3)

//Example:

//setcookie(name: 'foo', value: 'bar', httponly: true); //PHP 8.1

$arr = ['x' => 1,  'y' => 3];

var_dump(sum(...$arr)); //int(4): Keys os array pass as parameters names