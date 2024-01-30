<?php

//Unable strict mode
declare(strict_types=1);

require __DIR__ . "/../includes/functions.php";

// Path: public/notas.php

//Equivalente de <?php echo $variable; es mediante <?= $variable; ? >

//Ways to define a Constant: value can't be changed
define('STATUS_PAID', 'paid');

//Second way to define a Constant:
const STATUS_UNPAID = 'unpaid';

//Magic Constants: the name is because value can change depend on the environment
var_dump(PHP_VERSION); //8.2.12 in this case

var_dump(__FILE__); //C:\Users\user\Github\PHP-TheRightWay\public

var_dump(__LINE__);

//Variable variables
$foo = 'bar';

$$foo = 'baz';

var_dump($foo, $bar);

var_dump("$foo , \$$foo");

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

$sum = fn (int $a, int $b): int => $a + $b; //Arrow functions

function sum(int $a, int $b): int
{
    return $a + $b;
}

//echo sum(1.5, 2.5); //Fatal error: Uncaught TypeError: Argument 1 passed to sum() must be of the type int, float given


//?Casting: cast a variable to a different type

$score = (int) '10';

//?BOOLEANS

$isCompleted = true;

if ($isCompleted) {
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

$x = PHP_INT_MAX + 1; //PHP_INT_MAX is a constant that contains the maximum value for an integer in PHP

$y = (int) null; //This will return 0

$z = 2_200_000; //This is a new feature in PHP 7.4: that make it more readable

$z_to_string = (string) $z; //This will return '2_200_000' as string; not 2200000

//?FLOATS

$float = 13.5e-3; //This is a scientific notation

$float_to_int = (int) $float; //This will return 0

$big_float = 13_000_000.5e10; //This will return 1.3E+17

var_dump(PHP_EOL);

var_dump($float); //This will return float(0.0135)

var_dump($float_to_int); //This will return int(0)

var_dump($big_float); //This will return float(1.3E+17)

var_dump(PHP_FLOAT_MAX);

//Let's talk about preccision
$d = floor((0.1 + 0.7) * 10); //This will return 7

$e = ceil((0.1 + 0.2) * 10); //This will return 4
//This is because the way that PHP handle the floating point numbers
//Example: 0.3000000000000004 * 10 = 3.000000000000004

$y = 0.23;

$u = 1 - 0.77;

$i = INF;

var_dump($y, $u);

var_dump($y == $u); //This will return false

var_dump(NAN); //This will return NAN: this is returned when a mathematical operation is not possible

var_dump(INF); //This happens when a number is too big to be represented as a float

var_dump(is_infinite($i)); //This will return true

var_dump(is_finite($u)); //This will return true

var_dump(is_nan(log(-1))); //This will return true

//?STRINGS

$firstName = 'John';
$secondName = 'Smith';

$fullName = "$firstName  $secondName"; //This will return 'John Smith'

var_dump($firstName . ' ' . $secondName); //This will return 'John Smith'

//Access to a character in a string
$firstName[0]; //This will return 'J'
$firstName[-1]; //This will return 'h'
$firstName[1] = 'O'; //This will return 'O'

var_dump($firstName); //Now this will return 'JOhn'

//Heredoc: this is a way to define a string
$heredoc = <<<TEXT
Line 1 $y
Line 2 $u 
Line 3 $i ' "
TEXT;

echo $heredoc; //This will return the string with the line breaks

var_dump(nl2br($heredoc)); //This will return the string with the line breaks

//Nowdoc: this is a way to define a string
$nowdoc = <<<'TEXT'
Line 1 $y
Line 2 $u
Line 3 $i ' "
TEXT;

$html = <<<HTML

HTML; //This will return the string without the line breaks

var_dump($nowdoc); //This will return the string without the variable inyection

//?NULL

$null = null; //This is the only value that can be assigned to a variable of type null

var_dump($null); //This will return NULL

var_dump(is_null($null)); //This will return true

unset($null); //This will delete the variable

var_dump((string) $null); //This will return ''

//?ARRAYS

$emptyArray = [];

$emptyArray2 = array();

$names = ['John', 'Mary', 'Jane']; //Arrays starts with index 0

var_dump($names[2]); //This will return 'Jane'

$names[] = 'Peter'; //This will add 'Peter' to the array

$names[1] = 'Daniel'; //This will change 'Mary' to 'Daniel'

array_push($names, 'Connor', 'Sarah'); //This will add 'Connor' and 'Sarah' to the array

var_dump($names); //This will return the array

//An array with keys and values
$stack = [
    'frontend' => 'JavaScript',
    'backend' => 'PHP',
    'database' => 'MySQL'
];

var_dump($stack['frontend']); //This will return 'JavaScript'

$stack['versioning'] = 'Git'; //This will add 'Git' to the array

$property = "style";

$stack[$property] = 'Tailwind'; //This will add 'Tailwind' to the array

var_dump($stack); //This will return the array

//Each element has diferent types of data
$programmingLanguages = [
    'PHP' => [
        'creator' => 'Rasmus Lerdorf',
        'extension' => '.php',
        'type' => 'backend',
        'website' => 'https://www.php.net/',
        'isOpenSource' => true,
        'frameworks' => [
            'Laravel',
            'Symfony',
            'CodeIgniter'
        ],
        'versions' => [
            [
                'version' => 7.4,
                'releaseDate' => '2019-11-28',
                'supportedUntil' => '2022-11-28'
            ],
            [
                'version' => 8.0,
                'releaseDate' => '2020-11-26',
                'supportedUntil' => '2023-11-26'
            ]
        ]
    ],
    'JavaScript' => [
        'creator' => 'Brendan Eich',
        'extension' => '.js',
        'type' => 'frontend',
        'website' => 'https://www.javascript.com/',
        'isOpenSource' => true,
        'frameworks' => [
            'React',
            'Vue',
            'Angular'
        ],
        'versions' => [
            [
                'version' => 'ES6',
                'releaseDate' => '2015-06-17',
                'supportedUntil' => '2024-06-17'
            ],
            [
                'version' => 'ES7',
                'releaseDate' => '2016-06-17',
                'supportedUntil' => '2024-06-17'
            ]
        ]
    ],
    'Python' => [
        'creator' => 'Guido van Rossum',
        'extension' => '.py',
        'type' => 'backend',
        'website' => 'https://www.python.org/',
        'isOpenSource' => true,
        'frameworks' => [
            'Django',
            'Flask',
            'Pyramid'
        ],
        'versions' => [
            [
                'version' => 3.9,
                'releaseDate' => '2020-10-05',
                'supportedUntil' => '2025-10-05'
            ],
            [
                'version' => 3.10,
                'releaseDate' => '2021-10-04',
                'supportedUntil' => '2026-10-04'
            ]
        ]
    ]
];

print_r($programmingLanguages);

print_r($programmingLanguages['PHP']['frameworks']); //This will return the frameworks of PHP

var_dump(array_key_exists('JavaScript', $programmingLanguages)); //This will return true

$testingArray = [true => 'a', 1 => 'b', '1' => 'c', 1.8 => 'd']; //This will return [1 => 'd']

//This happens because PHP converts the keys to integers when they are not integers
//1 and '1' are the same key, so the last one will be the one that will be stored in the array
var_dump($testingArray);

$array_2 = [0, 1, 2, 50 => 3, 4, 5]; //This will return [0, 1, 2, 50 => 3, 51 => 4, 52 => 5]

var_dump($array_2);

array_shift($array_2); //This will delete the first element of the array

array_unshift($array_2, 0); //This will add 0 to the first element of the array, unshift reorder the indexes

unset($array_2[1], $array_2[50]); //This will delete elements 1 and 51 of the array

var_dump($array_2);

$b = 5;

var_dump((array) $b); //This will return [5]

//?EXPRESSIONS: are the building blocks of PHP

$m = 10;
$n = 5;

$o = $m === $n; //This will return false
$l = $m > $n; //This will return true

var_dump($o, $l);

//?OPERATORS: are used to perform operations on variables and values

//*Arithmetic Operators (+ - * / % **)
$num = 10;
$num2 = 5;
$num3 = 0;
$num4 = 10.5;
$num5 = 2.9;

var_dump($num + $num2); //This will return 15
var_dump($num ** $num2); //This will return 100: ** is exponentiation
var_dump($num / $num2); //This will return 2
var_dump($num % $num2); //This will return 0: % is modulus

var_dump(fdiv($num, $num3)); //This will return INF: fdiv is a function that returns the division of two numbers

var_dump($num4 % $num5); //This will return 0 because both numbers are converted to integers

var_dump(fmod($x, $y)); //This will return 1.8: fmod is a function that returns the modulus of two numbers, even if they are floats

//*Assignment Operators (= += -= *= /= %= **=)
$var1 = 10;

$var2 = $var3 = 50; //This will assign 50 to both variables

$var4 = ($var5 = 20) + 5; //This will assign 25 to $var4 and 20 to $var5

//This is not recommended because it can be confusing, just for practice

var_dump($var1, $var2); //This will return 10, 50

var_dump($var4, $var5); //This will return 25, 20

$var1 *= 3; //This will assign 30 to $var1

$var6 += 10; //This will assign 10 to $var6, but will throw a notice because $var6 is not defined

//*String Operators (.=  .)
$greeting = 'Hello';

$name = 'John Snow';

var_dump($greeting . $name); //This will return 'Hello John Snow'

//*Comparison Operators (== === != !== > < >= <= <=> ?? ?:)
$x = 5;
$y = '5';
$z = 10;
$w = 2;

//=== compares the value and the type of the variable and == only compares the value
var_dump($x === $y); //This will return false because they are not the same type
var_dump($x == $y); //This will return true because they are the same value

var_dump($x <=> $z); //This will return -1 because $x is less than $z
var_dump($z <=> $x); //This will return 1 because $z is greater than $x
var_dump($x <=> $y); //This will return 0 because $x is equal to $y

var_dump(0 == 'hello'); //This will return false because 0 is converted to '0' and '0' is not equal to 'hello'
//This behavior happens since PHP 7, then is a string comparison

$hello = 'Hello World';

$finded = strpos($hello, 'H'); //This will return 0: the position where is the first 'H'

if ($finded === false) {
    print_r('Not found');
} else {
    print_r('Found in position: ' . $finded);
}

//This is the same as the if statement, ternary operator. Always use parenthesis to avoid errors.
$result = ($finded === false) ? 'Not found' : 'Found in position: ' . $finded;

$x = null;

$y = $x ?? 'default'; //This will return 'default' because $x is null

//*Error Control Operators (@): supress the error messages. This is not recommended because it can hide errors
//It's better to use try/catch blocks or create error handlers, error exceptions, etc.

$x = @file('not_exists.txt'); //This will throw a warning

//*Incrementing/Decrementing Operators (++ --)

$x = 5;

$x++; //This will add 1 to $x after the value's been returned
$x--; //This will subtract 1 to $x after the value's been returned

++$x; //This will add 1 to $x before the value's been returned
--$x; //This will subtract 1 to $x before the value's been returned

//*Logical Operators (&& || ! and or xor)

$x = true;
$y = false;

$z = $x and $y; //This will return true because $z is assigned to $x and then $y is assigned to $z

var_dump($x && $y); //This will return false: first $x is evaluated and then $y, if $x is false, $y is not evaluated. Name is short-circuit evaluation.
var_dump($x || $y); //This will return true: first $x is evaluated and then $y, if $x is true, $y is not evaluated

var_dump(!$x); //This will return false
var_dump(!$y); //This will return true

var_dump(!$x || $y); //This will return true (XOR)


//*Bitwise Operators (& | ^ ~ << >>): are used to compare binary numbers

$x = 6;
$y = 3;

$heredoc = <<<TEXT
110
&
011
---
010 = 3

110
|
011
---
111 = 7

110
^
011
---
101 = 5

001 (~110)
& Aninversion operator: flip de bits of the number
011
---
001 = 1

110
<<<
110000 : shift the bits to the left

110 
>>
0 : shift the bits to the right

TEXT;

var_dump(~$x & $y); //This will return 1

//*Array Operators (+ == === != !== <> < > <= >=)

$x = ['a',  'b', 'c'];
$y = ['d', 'e', 'f'];

$z = $x + $y; //This will return ['a', 'b', 'c', 'd', 'e', 'f']. This happens because the keys are not the same

print_r($z);

$a = ['a' => 1, 'b' => 2, 'c' => 3];
$b = ['a' => '1', 'b' => '2', 'c' => '3'];

var_dump($a == $b); //This will return true because the values are the same
var_dump($a === $b); //This will return false because the types are not the same

//*Operator Precedence & Associativity: the order in which the operators are evaluated
//@link https://www.php.net/manual/en/language.operators.precedence.php

$x = 5 + 3 * 5; //This will return 20 because the multiplication is evaluated first

$y = (5 + 3) * 5; //This will return 40 because the parenthesis are evaluated first

$a = true;
$b = false;
$c = true;

var_dump($a && $b || $c); //First is evaluated $a && $b, then $c

//*Execution Operators (``)
//@link https://www.php.net/manual/en/language.operators.execution.php

//*Type Operators (instanceof)
//@link https://www.php.net/manual/en/language.operators.type.php


//*Nullsafe Operator PHP8 (->?)
//@link https://wiki.php.net/rfc/nullsafe_operator
