<?php

declare(strict_types=1);

//Root directory: "C:\Users\luis_\Documents\GitHub\PHP-TheRightWay\"
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transactions_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);


//Your Code
require APP_PATH . 'app.php';

$files = getTransactionsFiles(FILES_PATH);

print_r($files);


