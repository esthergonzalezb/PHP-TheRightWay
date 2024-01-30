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
$multiplication = function (int|float ...$numbers) use ($x): int|float {
    return array_reduce($numbers, fn ($carry, $number) => $carry * $number, 1);
};

$x = 10;

var_dump($multiplication(1, 2, 3, 4, 5)); // 120
