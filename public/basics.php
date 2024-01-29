<?php

//Unable strict mode
declare(strict_types=1);

// Path: public/notas.php

//Equivalente de <?php echo $variable; es mediante <?= $variable; ? >

//Ways to define a Constant: value can't be changed
define('STATUS_PAID', 'paid');

//Second way to define a Constant:
const STATUS_UNPAID = 'unpaid';

//Magic Constants: the name is because value can change depend on the environment
echo PHP_VERSION; //8.2.12 in this case

echo __FILE__; //C:\Users\user\Github\PHP-TheRightWay\public

echo __LINE__;

//Variable variables
$foo = 'bar';

$$foo = 'baz';

echo $foo, $bar;

echo "$foo , \$$foo";

//Data Types and Casting: PHP is a loosely typed language

# 4  Scalar Types: 
# bool - true/false
$completed = true;
# int - 1, 2, 3, 0, -5 (no decimal)
$score = 10;
# float - 1.2, 3.14, -5.0 (decimal)
$price = 0.99;
# string - 'Hello World', "Hello World"
$greeting = 'Hello World';

# 4  Compound Types:
# array
$scores = [10, 20, 30];
# object
$user = new stdClass();
# callable
$fn = fn () => 'Hello World';
# iterable


# 4 Special Types:
# resource
# NULL

//?To define an strict mode in PHP, we can use declare(strict_types=1); in the first line of the file

$sum = fn(int $a, int $b): int => $a + $b; //Arrow functions

function sum(int $a, int $b): int
{
    return $a + $b;
}

//echo sum(1.5, 2.5); //Fatal error: Uncaught TypeError: Argument 1 passed to sum() must be of the type int, float given


//?Casting: cast a variable to a different type
$score = (int) '10';

//?BOOLEANS
$isCompleted = true;

if($isCompleted) {
    //Do something
} else {
    //Do something else
}

//This values are false:

// integers 0 -0 = false
// floats 0.0 -0.0 = false
// strings '' = false
// arrays [] = false
// objects with no properties = false
// NULL = false
// '0' = false

//?INTEGERS
$x = PHP_INT_MAX + 1;


