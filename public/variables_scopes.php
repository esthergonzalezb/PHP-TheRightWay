<?php

declare(strict_types=1);

//? VARIABLE SCOPES

$x = 5;

function foo()
{
    //echo $x; // Undefined variable: x 
}

//We can pass the variable as a parameter
function fii($variable)
{
    var_dump($variable);
}

fii($x); // int(5)

//We can use the global keyword
function pho()
{
    global $x;

    $x = 10;

    var_dump($x); // int(10)
}

pho();

//We can use the $GLOBALS superglobal
//$_GLOBALS is a superglobal array that contains all the global variables in the script
//*$_GLOBALS are usefull for cookies and sessions
function phi()
{
    var_dump($GLOBALS['x']); // int(15)
}

phi();

//Expensive process example to simulate the cost to get a $GLOBALS variable value
function someVeryExpensiveFunction()
{
    sleep(2);

    return $GLOBALS['x'];
}

/**
 * We can use static variables to avoid the expensive process to be executed more than once
 */
function getValue()
{
    //PHP erase all the variables after the script is executed, but static variables are not erased
    static $value = null;

    if ($value === null) {
        $value = someVeryExpensiveFunction();
    }

    return $value;
}

//Now after the static variable is set, the expensive process will not be executed again
var_dump(getValue()); // int(10)
var_dump(getValue()); // int(10)
var_dump(getValue()); // int(10)