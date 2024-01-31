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

function errorHandler(int $type, string $msg, ?string $file, ?int $line): void
{
    echo '<pre>';
    echo "Error: [$type] $msg\n";
    echo "File: $file\n";
    echo "Line: $line\n";
    echo '</pre>';
}

error_reporting(E_ALL & ~E_WARNING); //Reports all errors except E_WARNING

set_error_handler('errorHandler', E_ALL); //Sets a user-defined error handler function

//Exceptions are represented in PHP by the class Exception (or any of its subclasses).
//When an exception is thrown, code following the statement will not be executed, and PHP will attempt to find the first matching catch block.