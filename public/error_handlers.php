<?php

declare(strict_types=1);

//?Error Handling

//@link https://www.php.net/manual/en/errorfunc.constants.php

error_reporting(E_ALL); //Reports all errors 
error_reporting(E_ALL & ~E_WARNING); //Reports all errors except E_WARNING
error_reporting(0); //Do not report any errors
error_reporting(E_ERROR | E_WARNING | E_PARSE); //Reports simple running errors

trigger_error('This is an error', E_USER_WARNING); //Generates a user-level error/warning/notice message

error_log('This is an error'); //Send an error message to the defined error handling routines

function errorHandler(int $type, string $msg, ?string $file, ?int $line): string
{
    return "Error: [$type] $msg\n File: $file\n Line: $line\n";
}

echo errorHandler(E_USER_WARNING, 'This is an error', __FILE__, __LINE__); //Generates a user-level error/warning/notice message

error_reporting(E_ALL & ~E_WARNING); //Reports all errors except E_WARNING

//The set_error_handler() function sets a user-defined error handler function that will be called on errors
set_error_handler('errorHandler', E_ALL);

//Exceptions are represented in PHP by the class Exception (or any of its subclasses).
//When an exception is thrown, code following the statement will not be executed, and PHP will attempt to find the first matching catch block.