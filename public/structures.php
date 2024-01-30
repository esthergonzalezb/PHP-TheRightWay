<?php

declare(strict_types=1);

include __DIR__ . '/../includes/functions.php';

//?Control Structures (if, else, elseif, else if, switch)

$score = 95;

if ($score >= 90) {
    // do something
} elseif ($score >= 80) {
    // do something else
} elseif ($score >= 70) {
    // do something else
} elseif ($score >= 60) {
    // do something else
} else {
    // do something else
}

?>

<!-- This is the same as above, but more readable -->
<?php if ($score >= 90) : ?>
    <h1>Score is greater than or equal to 90</h1>
<?php elseif ($score >= 80) : ?>
    <h1>Score is greater than or equal to 80</h1>
<?php elseif ($score >= 70) : ?>
    <h1>Score is greater than or equal to 70</h1>
<?php elseif ($score >= 60) : ?>
    <h1>Score is greater than or equal to 60</h1>
<?php else : ?>
    <h1>Score is less than 60</h1>
<?php endif; ?>

<?php

//? LOOPS (for, while, do...while, foreach)

//*WHILE

$i = 0;
$v = 0;
$y = 0;
$w = 0;
$z = 0;

//while will continue to run as long as the condition is true. 
while ($i <= 15) {
    print_r($i++);
}

//Infinite loop: must have a break statement to stop the loop
while (true) {

    if ($y == 10) {
        break;
    }
    $y++;
}

while (true) {
    while ($z > 10) {
        break 2; //breaks out of the parent loop
    }

    $z++;
}

while ($w <= 15) {
    if ($w % 2 == 0) {
        $w++;
        continue; //skips the rest of the code in the loop and goes to the next iteration
    }

    $w++; //this will not run if the continue statement is executed
}

//*DO WHILE: will always run at least once

do {
    if ($v == 5) {
        break;
    }

    $v++;
} while (false);

//*FOR: take 3 parameters: initialization, condition, increment. Condition is checked before each iteration. Increment is executed after each iteration.

for ($i = 0; $i <= 10; $i++) {
    //Do something
}

$text = ['one', 'two', 'three', 'four', 'five'];

//This has a performance hit because it has to count the array each time
for ($i = 0; $i < count($text); $i++) {

    //Do something 
}

//To solve we can store the count in a variable
$lenght = count($text);
for ($i = 0; $i < count($text); $i++) {

    //Do something 
}

//Or we can use set the variable in the loop
for ($i = 0, $lenght = count($text); $i < $lenght; $i++) {

    //Do something 
}

$programmingLanguages = ['PHP', 'JavaScript', 'Python', 'Java', 'C#', 'Go', 'Ruby', 'Swift', 'C++', 'C'];

//*FOREACH: used to iterate over arrays and objects

//Every iteration will return the value of the current element. 
//The key is optional: return the index of the current element
foreach ($programmingLanguages as $key => $language) {
    //Do something
}

//& is used to pass the value by reference. This will change the value of the array
foreach ($programmingLanguages as $key => &$language) {
    $language = 'Kotlin'; //This will change the value of every element in the array
}

unset($language); //This will unset the reference to the last element in the array

print_r($programmingLanguages);

$user = [
    'name' => 'John Doe',
    'email' => 'gio@email.com',
    'skills' => ['PHP', 'JavaScript', 'Python']
];

foreach ($user as $property => $value) {

    if (is_array($value)) {
        $value = implode(",", $value);
    }
    print_r("$property: " . $value . "\n");
}


//? SWITCH: used to select one of many blocks of code to be executed
//Implement loose type checking

$paymentStatus = 'paid';

//Once a match is found, the code will run until a break statement is found
switch ($paymentStatus) {
    case 'paid':
        //do something
        break;
    case 'pending':
        //do something
        break;
    case 'rejected':
        //do something
        break;
    default:
        //Unknown payment status
        break;
}

switch ($paymentStatus) {
    case 'paid':
        //Do Task 1
        break;
    case 'pending': //If the status is pending or rejected, it will do task 2
    case 'rejected':
        //Do Task 2
        break;
    case 'refunded':
        //Do Task 4
        break; //This will break out of the switch statement, unless you specify a fallthrough '2' or '3', etc
    default:
        //Unknown payment status
        break;
}

//*Example

function x()
{
    sleep(3);

    return 3;
}

//This will run the function 5 times taking 15 seconds to complete
if (x() === 1) {
    //do something
} elseif (x() === 2) {
    //do something else
} elseif (x() === 3) {
    //do something else
} elseif (x() === 4) {
    //do something else
} else {
    //do something else
}

//The solution is pretty simple
$x = x();
if ($x === 1) {
    //do something
} elseif ($x === 2) {
    //do something else
} elseif ($x === 3) {
    //do something else
} elseif ($x === 4) {
    //do something else
} else {
    //do something else
}

//Other solution is to use a switch statement: this will run the function only once and will take 3 seconds to complete
switch (x()) {
    case 1:
        //do something
        break;
    case 2:
        //do something else
        break;
    case 3:
        //do something else
        break;
    case 4:
        //do something else
        break;
    default:
        //do something else
        break;
}


//?MATCH EXPRESSION: similar to switch, but it returns a value (implemented in PHP 8)
//This will return the value of the first match and will not continue to the next case
//Implements strict type checking

$paymentStatusDisplay = match ($paymentStatus) {
    'paid' => 'Do Task 1',
    'pending', 'rejected' => 'Do Task 2',
    'refunded' => 'Do Task 3',
    default => 'Unknown payment status'
};

var_dump($paymentStatusDisplay); 

