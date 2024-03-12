<?php

declare(strict_types=1);

/**
 * Get recursively all files with the given extensions from the given path
 * 
 * @param string $path The path to search for files
 * @param array $extensions The extensions to search for
 * 
 * @return array The files found in the given path
 */
function getTransactionsFiles(string $path, array $extensions = ["csv"]): array
{
    $files = [];

    foreach (scandir($path) as $file) {

        if ($file === "." || $file === "..") continue;

        $filePath = $path . DIRECTORY_SEPARATOR . $file;

        if (!is_dir($filePath)) {

            if (in_array(pathinfo($file, PATHINFO_EXTENSION), $extensions)) $files[] = $filePath;

            continue;
        }

        $files = [...$files, ...getTransactionsFiles($filePath)];
    }

    return $files;
}

/**
 * Get the transactions from the given files
 * 
 * Filter the files that do not exist and merge the transactions from the given files
 * 
 * ... is the spread operator, it unpack the elements of an array
 * 
 * @param array $files The files to get the transactions from
 * @param callable $transactionHandler The function to handle the transactions
 * 
 * @return array The transactions from the given files
 */
function getTransactions(array $files, ?callable $transactionHandler = null): array
{
    return array_merge(...array_map('arrayFromCsv', array_filter($files, 'file_exists')));
}

/**
 * Transform a CSV file into an array
 * 
 * @param string $file The path to the CSV file
 * 
 * @return array The CSV file as an array
 */
function arrayFromCsv(string $file): array
{
    $lines = explode("\n", file_get_contents($file));

    // Remove the first line (header)
    array_shift($lines);

    return array_map(fn ($line) => extractTransaction(str_getcsv($line)), $lines);
}

/**
 * Reformat the transaction data to eliminate the $ sign and commas
 * 
 * @param array $transaction The transaction data
 * 
 * @return array The reformatted transaction data
 */
function extractTransaction(array $transaction): array
{
    //Deconstruct the array
    [$date, $check, $description, $amount] = $transaction;

    return [
        'date' => $date,
        'checkNumber' => $check,
        'description' => $description,
        'amount' => (float) filter_var($amount, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION)
    ];
}

/**
 * Calculate the total amount of the given transactions
 * 
 * @param array $transactions The transactions to calculate the total amount
 * 
 * @return array The total amount of the given transactions
 */
function calculateTotals(array $transactions): array
{
    $totals = ['netTotal' => 0, 'totalIncome' => 0, 'totalExpense' => 0];

    foreach ($transactions as $transaction) {

        $totals['netTotal'] += $transaction['amount'];

        ($transaction['amount'] > 0) ? $totals['totalIncome'] += $transaction['amount'] : $totals['totalExpense'] += $transaction['amount'];
    }

    return $totals;
}

/**
 * Otra forma de hacerlo:
 * 
 * @param string $fileName The path to the CSV file
 * 
 * @return array The CSV file as an array
 */
function getTransactions_2(string $fileName): array
{
    if (!file_exists($fileName)) {
        trigger_error("File not found: $fileName", E_USER_ERROR);
    }

    $file = fopen($fileName, "r");

    $transactions = [];

    while (($transaction = fgetcsv($file)) !== false) {
        $transactions[] = $transaction;
    }

    return $transactions;
}
