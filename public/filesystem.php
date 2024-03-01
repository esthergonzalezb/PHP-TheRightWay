<?php

declare(strict_types=1);

//?FILE SYSTEM  

//The file system is the part of the operating system that handles the management of files and directories.

//Escanea el directorio actual y devuelve un array con los nombres de los ficheros y directorios que contiene.
$dir = scandir(__DIR__);

var_dump($dir);

//Try to create a directory, if the directory already exists, an error is thrown.
mkdir('foo');
//Try to create directory recursively, if the directory already exists, an error is thrown.
mkdir('photos/2021/december', recursive: true);
//Try to remove a directory, if the directory does not exist, an error is thrown.
rmdir('foo');
//Try to remove a directory recursively, if the directory does not exist, an error is thrown.
rmdir('photos/2021/december');

echo filesize('testing.txt') ? 'Directory exists' : 'Directory does not exist';

file_put_contents('testing.txt', 'Hello World');

echo filesize('testing.txt') ? 'Directory exists' : 'Directory does not exist';

//Remove the status cache of the file
clearstatcache();

//Check if the file exists
if (!file_exists('testing.txt')) {

    echo 'File does not exist';
    exit;
}

//Open a file for reading, if the file does not exist, return false
$file = fopen('testing.txt', 'r');

//Read the file line by line until the end of the file
while (($line = fgets($file) !== false)) {
    echo $line . PHP_EOL;
}

//This is usefull for reading CSV files
while (($line = fgetcsv($file) !== false)) {
    print_r($line);
}

//Close the file after reading
fclose($file);

clearstatcache();

$content = file_get_contents('testing.txt', offset: 3, length: 2);

echo $content;

//Append content to the file, not overwrite
file_put_contents('testing.txt', PHP_EOL . 'Testing', FILE_APPEND);

//Delete the file
unlink('testing.txt');

//Copy the file to another file
copy('testing.txt', 'testing2.txt');

//Rename the file
rename('testing2.txt', 'testing3.txt');
