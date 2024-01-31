<?php

declare(strict_types=1);

include __DIR__ . '/../includes/helpers.php';

//?ARRAYS FUNCTIONS
//@link https://www.php.net/manual/en/ref.array.php

$fruits = ['apple', 'orange', 'banana', 'pear', 'strawberry'];
$numbers = [2, 4, 6, 8, 10];

$items = [
    'first' => 'apple',
    'second' => 'orange',
    'third' => 'banana',
    'fourth' => 'pear',
    'fifth' => 'strawberry',
    'sixth' => 'pear'
];

$chuncked_array = array_chunk($fruits, 2, true); //? returns a multidimensional array with each element containing 2 items. Third parameter is optional and if set to true, the keys will be preserved.

print_array($chuncked_array);

$array_combined = array_combine($numbers, $fruits); //? returns an array by using one array for keys and another for its values

print_array($array_combined);

$filter_array = array_filter($fruits, fn ($fruit) => strpos($fruit, 'p') !== false); //? returns an array containing all the elements of fruits array after applying the callback function

print_array($filter_array);

//Returns the keys from array. If the optional search_value is specified, then only the keys for that value are returned. Otherwise, all the keys from the array are returned. Third parameter is optional and if set to true, strict comparison (===) will be used during the search.
$keys = array_keys($items, 'pear', true); //? returns an array of all the keys in items array

print_array($keys);

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$array_2 = [10, 11, 12, 13, 14, 15, 16, 17, 18, 19];
$array_3 = [20, 21, 22, 23, 24, 25, 26, 27, 28, 29];

$new_array = array_map(fn ($value) => $value / 2, $array, $array_2, $array_3); //? returns an array containing all the elements of array after applying the callback function to each one

print_array($new_array);

//Returns an array containing the multiplication of corresponding elements of the given arrays
$multiply_array = array_map(fn ($number1, $number2) => $number1 * $number2, $array, $array_2);

print_array($multiply_array);

$merges = array_merge($array, $array_2, $array_3); //? returns an array resulting from the merging of the arguments

print_array($merges);


$invoiceItems = [
    [
        'price' => 9.99,
        'quantity' => 2,
        'desc' => 'Item 1'
    ],
    [
        'price' => 19.99,
        'quantity' => 1,
        'desc' => 'Item 2'
    ],
    [
        'price' => 4.99,
        'quantity' => 3,
        'desc' => 'Item 3'
    ],
    [
        'price' => 49.99,
        'quantity' => 1,
        'desc' => 'Item 4'
    ]
];

//Returns a single value resulting from the reduction of the given array using a callback function
$total = array_reduce($invoiceItems, fn ($sum, $item) => $sum + $item['quantity'] * $item['price'], 0);

var_dump($total);

$array = ['a', 'b', 'c', 'd', 'e', 'A', 'B', 'C', 'D', 'E'];

$key = array_search('c', $array, true); //? searches for the given value in the array and returns its corresponding key if successful

if (in_array('c', $array, true)) { //? checks if a value exists in an array
    echo 'Found';
} else {
    echo 'Not found';
}

//Find the difference of arrays
$array_1 = ['d' => 1, 'e' => 2, 'l' => 3, 'g' => 9.8];
$array_2 = ['e' => 5, 'f' => 2, 'g' => 7, 'h' => 8];
$array_3 = ['i' => 3, 'j' => 10, 'k' => 11, 'l' => 12];

$array_dif = array_diff($array_1, $array_2, $array_3); //? returns an array containing all the values from array_1 that are not present in any of the other arrays

print_array($array_dif);

$array_dif_assoc = array_diff_assoc($array_1, $array_2, $array_3); //? returns an array containing all the values from array_1 that are not present in any of the other arrays when comparing the keys as well

$array_diff_key = array_diff_key($array_1, $array_2, $array_3); //? returns an array containing all the values from array_1 that are not present in any of the other arrays when comparing the keys only

//asort — Sort an array and maintain index association

ksort($array_1); //? sorts an array by key, maintaining key to data correlations. This is useful mainly for associative arrays

usort($array_1, fn ($a, $b) => $a <=> $b); //? sorts an array by values using a user-defined comparison function

var_dump($array_1);

//?ARRAY DESTRUCTURING
[$first, $second, $third, $fourth, $fifth] = $fruits;

list($first, $second, $third, $fourth, $fifth) = $fruits;
