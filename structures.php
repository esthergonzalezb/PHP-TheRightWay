<?php

//* Estructuras de control (if, elseif, else, swith, while, do while, for, foreach, break, continue)
//? if, else, elseif

$puntuacion = 10;
if ($puntuacion > 5) {
    echo "Has aprobado";
} elseif ($puntuacion === 5) {
    echo "Por los pelos";
} else {
    echo "Has suspendido";
};

$score = 93;
if ($score >= 99) {
    echo "S";
} elseif ($score >= 90) {
    echo "A";
} elseif ($score >= 80) {
    echo "B";
} elseif ($score >= 70) {
    echo "C";
} elseif ($score >= 60) {
    echo "D";
} else {
    echo "F";
}
// Las condiciones peculiares/raras, se ponen las primeras

//? switch
switch (true) {
    case $score >= 99:
        echo "S";
        break;
    case $score >= 90:
        echo "A";
        break;
    case $score >= 80:
        echo "B";
        break;
    case $score >= 70:
        echo "C";
        break;
    case $score >= 60:
        echo "D";
        break;
    default:
        echo "F";
        //break;
}

//? while, do while, for, foreach

$i = 0;
while ($i < 5) {
    echo $i . " ";
    $i++;
}

do {
    echo $i . " ";
    $i++;
} while ($i < 5); // Son las dos lo  mismo, pero con "do" primero se ejecuta una vez

$names = ["David", "Alex", "Juan"];

for ($i = 0; $i < count($names); $i++) {
    echo $names[$i] . PHP_EOL; //Lo que hace es hacer un salto de línea
}

foreach ($names as $name) {
    echo $name . " ";
}
foreach ($names as $clave => $name) {
    echo "El índice es $clave y su valor es $name"  . PHP_EOL;
} // El índice es 0 y su valor es David...

//! Ejercicio: Monstrar un array de forma inversa usando un bucle

$names = ["David", "Alex", "Juan"];

for ($i = count($names) - 1; $i >= 0; $i--) {
    echo $names[$i] . PHP_EOL;
}

$namesInverso = array_reverse($names);

var_dump($namesInverso);

//? Eficiencia
function esperar()
{
    sleep(3);
    return 3;
}

if (esperar() === 1) {
} elseif (esperar() === 2) {
    //Hace algo
} elseif (esperar() === 3) {
    //
    echo "3";
} else {
    //
}

switch (true) {
    case esperar() === 1;
        echo "Hola";
    case esperar() === 2;
        echo "Hola";
    case esperar() === 3:
        echo "3";
        break;
} //Esto dura 3 + 3 + 3 = 9 segundos
switch (esperar()) {
    case 1;
        echo "Hola";
    case 2;
        echo "Hola";
    case 3:
        echo "3";
        break;
} //Esto ya sí dura 3 segundos
