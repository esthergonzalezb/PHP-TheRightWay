<?php

declare(strict_types=1);

//? php.ini & configuration

//* The configuration file (php.ini) is read when PHP starts up. For the server module versions of PHP, this happens only once when the web server is started. For the CGI and CLI versions, it happens on every invocation.

//@link https://www.php.net/manual/es/ini.list.php  

//error_reporting, error_log, display_errors
error_reporting(E_ALL); //Reports all errors

ini_set('error_reporting', E_ALL & ~E_WARNING); //Reports all errors except E_WARNING

ini_set('display_errors', 0); //Do not display errors in the browser

ini_set('max_execution_time', 3);

var_dump(ini_get('memory_limit'));

$string = '0';

for ($i = 0; $i < 1000000; $i++) {
    //$string .= $string;
}

var_dump($string);

//*This will shown a fatal error because the memory limit is exceeded

//Show the upload temp directory
var_dump(ini_get('upload_tmp_dir'));

//Get current timezone from php.ini
var_dump(ini_get('date.timezone'));

