<?php

declare(strict_types=1);

//? VARIABLE, ANONYMOUS AND ARROW FUNCTIONS

function sum(int|float ...$numbers): int|float
{
    return array_sum($numbers);
}

$x = 'sum';
$y = 'multiply';

var_dump($x(1, 2, 3, 4, 5)); // 15

//Check if a variable is callable
echo (is_callable($x)) ? "$x is callable" : "$x is not callable"; // sum is callable
echo (is_callable($y)) ? "$y is callable" : "$y is not callable"; // multiply is not callable

//Anonymous functions or Lambda functions

/**
 * Anonymous functions return the multiplication of all the numbers passed as arguments.
 * This is an expression, so we can assign it to a variable.
 */
$multiplication = function (int|float ...$numbers): int|float {
    return array_reduce($numbers, fn ($carry, $number) => $carry * $number, 1);
};

$divisor = 1000;

$division = function (int|float ...$numbers) use ($divisor, $multiplication): int|float {
    return  $divisor / $multiplication(...$numbers);
};

var_dump($multiplication(1, 2, 3, 4, 5)); // 120

var_dump($division(1, 2, 3, 4, 5)); // 8.3333333333333

/**
 * @param int|float $divisor The divisor
 * @param \Closure $fn The function to be called
 * @param int|float ...$numbers The numbers to be passed to the function
 * 
 * @return int|float
 */
$division_callable = function (int|float $divisor, \Closure $fn, int|float ...$numbers): int|float {
    return  $divisor / $fn(...$numbers);
};

var_dump($division_callable(1000, $multiplication, 1, 2, 3, 4, 5)); // 8.3333333333333


//? ARROW FUNCTIONS: PHP 7.4 and above

$array = [1, 2, 3, 4, 5];

$new_array = array_map(function ($element) {
    return $element * 2;
}, $array);

//This is used for single line expressions
$new_array = array_map(fn ($element) => $element * 2, $array);

function multiply_by_two($element)
{
    return $element * 2;
}

$new_array = array_map('multiply_by_two', $array);

var_dump($new_array);

//? CLOSURES: anonymous functions are instances or closures of the Closure class
