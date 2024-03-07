<?php

declare(strict_types=1);

/**
 * Get the list of transactions files
 */
function getTransactionsFiles(string $path, array $extensions = ["csv"]): array
{

    $files = [];

    var_dump($path);

    foreach (scandir($path) as $file) {

        if ($file === "." || $file === "..") continue;

        if (!is_dir($path . $file)) {
            $files[] = $file;
            continue;
        }

        return [...$files, ...getTransactionsFiles(realpath($path . $file))];
    }

    return $files;
}

/**
 * Read files from a directory
 * 
 * @param string $path The path to the directory
 * @param array $extensions The file extensions to read
 * 
 * @return array The list of files
 * 
 */
function readFiles(string $path, array $extensions = ["csv"]): array
{
    $files = [];

    foreach (scandir($path) as $file) {

        $path = realpath($file);

        if (!is_dir($path)) {
        }
    }

    $files = array_filter($files, fn ($file) => in_array(pathinfo($file, PATHINFO_EXTENSION), $extensions));
    $files = array_map(fn ($file) => $path . DIRECTORY_SEPARATOR . $file, $files);
    return $files;
}


/*

    function getDirContents($dir, &$results = array()) {
    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            $results[] = $path;
        } else if ($value != "." && $value != "..") {
            getDirContents($path, $results);
            $results[] = $path;
        }
    }

    return $results; 
}

var_dump(getDirContents('/xampp/htdocs/WORK'));
*/