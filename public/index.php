<?php

declare(strict_types=1);

//Root directory: "C:\Users\luis_\Documents\GitHub\PHP-TheRightWay\"
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app');
define('FILES_PATH', $root . 'transactions_files');
define('VIEWS_PATH', $root . 'views');


//Your Code
require APP_PATH . DIRECTORY_SEPARATOR .  'App.php';
require APP_PATH . DIRECTORY_SEPARATOR .  'helpers.php';

$files = getTransactionsFiles(FILES_PATH);

$transactions = getTransactions($files);

$totals = calculateTotals($transactions);

include_once VIEWS_PATH . DIRECTORY_SEPARATOR . 'transactions.php';
