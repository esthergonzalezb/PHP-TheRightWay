<?php

declare(strict_types=1);

//?FUNCTIONS 

function foo()
{
    //Do some code
}

//?FUNCTIONS WITH RETURN VALUES

function function_return(): string
{
    //Do some code
    return 'Hello World';
}

//?FUNCTIONS WITH RETURN VALUES AND PARAMETERS
function sum(int $num1, int $num2): int
{
    return $num1 + $num2;
}

var_dump(sum(1, 2)); //int(3)

//?FUNCTIONS WITH RETURN VALUES AND PARAMETERS AND DEFAULT VALUES

function greetings(string $name = 'World'): string
{
    return "Hello $name";
}

greetings("John"); //Hello John
greetings(); //Hello World

//?FUNCTIONS WITH RETURN VALUES AND PARAMETERS AND DEFAULT VALUES AND OPTIONAL PARAMETERS

function greetings_optional(string $name = 'World', string $greeting = 'Hello'): string
{
    return "$greeting $name";
}

greetings_optional("John"); //Hello John

//?FUNCTION RETURN NULL

function return_null(): void
{
    //return null; //This is not allowed because the function return type is void
    //Do some code
}

//?FUNCTION RETURN MULTIPLE TYPE HINTS

function return_multiple_type_hints(): int | string
{
    //Do some code
    return 1;
}

function return_multiple_type(): mixed
{
    //Do some code
    return 1.5;
}
