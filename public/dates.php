<?php

declare(strict_types=1);

//? DATE AND TIME
//@link https://www.php.net/manual/es/function.date.php
//Timezone dependes on php.ini file (your local configuration)

var_dump(date_default_timezone_get()); // string(3) "Europe/Berlin"

date_default_timezone_set('UTC'); //Set timezone to UTC, its recommended to use UTC

$currentTime = time(); // Unix timestamp in seconds

var_dump($currentTime);

$currentTime_add_5_days = strtotime('+5 days', $currentTime); // Unix timestamp in seconds

$currentTime_add_5_days = $currentTime + 5 * 24 * 60 * 60; //Add 5 days converting days to seconds

var_dump(date('Y-m-d H:i:s', $currentTime_add_5_days)); // 2021-10-03 15:00:00 ? 

$currentTime_sub_2_days = strtotime('-2 days', $currentTime); // Unix timestamp in seconds

$currentTime_sub_2_days = $currentTime - 2 * 24 * 60 * 60; //Subtract 2 days converting days to seconds

var_dump(date('m/d/Y g:ia', $currentTime_sub_2_days)); // 09/26/2021 3:00pm

//? Create a date: if null is passed as argument, the current timestamp is used
$createdDate = mktime(0, 0, 0, 4, 10, null);

var_dump(date('d-M-Y H:i:s', $createdDate));

var_dump(date('m/d/Y g:ia', strtotime('2021-01-18 07:00:00'))); // 01/18/2021 7:00am

var_dump($date = date('m/d/Y g:ia', strtotime('tomorrow'))); //01/31/2024 12:00am"

var_dump(date_parse($date)); //Parse a date string into an array

print_r(date_parse_from_format('m/d/Y g:ia', $date)); //Parse a date string into an array using a custom format