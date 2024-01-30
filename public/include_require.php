<?php

declare(strict_types=1);

//? REQUIRE / INCLUDE / REQUIRE_ONCE / INCLUDE_ONCE
//This allows to separate code into different files and include them in the main file

include __DIR__ . '/../includes/functions.php'; //include will include the file and continue to run the script

//include error will not stop the script from running
//require error will stop the script from running
//require_once will only include the file once, if the file is included again it will not include it again
//include_once will only include the file once, if the file is included again it will not include it again

require __DIR__ . "/../includes/app.php"; //If the file is not found it will throw an error and stop the script from running

//Save and include or require into a variable
ob_start(); //Starts the output buffer

include __DIR__ . '/../pages/components/header.php';

$header = ob_get_clean(); //Cleans the output buffer and saves it into a variable

echo $header;
