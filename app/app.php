<?php

declare(strict_types=1);

function readFiles(string $path, array $extensions = ["csv"]): array
{
    $files = scandir($path);

    foreach ($files as $dir => $file) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $file);

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