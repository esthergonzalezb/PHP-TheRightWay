<?php

declare(strict_types=1); //Only applies to the current file

declare(encoding='UTF-8'); //encoding will force the function to use the correct encoding

include __DIR__ . '/../includes/functions.php';

//?RETURN / DECLARE / GOTO

function sum(int $x, int $y): int
{
    return $x + $y; //return will stop the function from running
}

$x = sum(5, 10);

var_dump(sum(10, 10));

//return can be used to return a value from a function, also to stop a function from running

//*declare - ticks

function onTick()
{
    var_dump('Tick');
}

//tick function will run every time the script runs on each tick
//tick function will run every 3rd tick
//tick function is not used very often except for debugging or benchmarking
register_tick_function('onTick');

declare(ticks=3);

$i = 0;
$length = 10;

while ($i < $length) {
    var_dump($i++);
}

//*declare - encoding 

//declare(strict_types=1); //strict types will force the function to use the correct data type

//var_dump(sum('5', 10)); //this will return an error because the function is expecting an integer
