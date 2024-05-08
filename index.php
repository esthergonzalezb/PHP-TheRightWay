<?php

declare(strict_types=1);

//? Variables: constantes y variables

//TODO: Constantes

const ESTADO_PAGADO = "paid";

const ESTADO_PENDIENTE = "pendiente";

define('ESTADO_DEUDA', 'deuda');

// Constantes mágicas, constantes del sistema
// var_dump(PHP_VERSION);

// var_dump(__FILE__);

// var_dump(__LINE__);

//TODO: Variables

$foo = 'bar';

$foo = 20;

$foo = 20.25;

$a = 'uno';

$$a = 'dos';

$$uno = 'tres';

// var_dump($dos);

//? Casting, Tipos de datos

$decimal = 20.25;

$entero = (int) $decimal;

$cadena = "veinte años";

$entero = (int) $cadena;

$completed = true;

$entero = (int) $completed;

// var_dump($entero);

//? Tipos compuestos (array, objeto, callable(function))

$scores = [10, 20, 30, 40];
$mixtos = [10, '20', 30.5, true];

$objeto = new stdClass();

// var_dump($objeto);

// Callable

// Función anónima	
$fn = function () {
    return 'Hola mundo';
};

// Función flecha
$fn = fn () => 'Hola mundo';

// var_dump($fn());

// Tipo especial NULL
/* 
var_dump(null);
var_dump(NULL); */

// Strict types: Elimina el famoso loose typing de PHP; convertirlo en strong typing

$sum = function (int $a,  int $b): int {
    return $a + $b;
};

// var_dump($sum(10, 20));


//? Booleans

$completed = false;

if ($completed) {
    // echo 'La tarea está completada';
} else {
    // echo 'La tarea está pendiente';
}

$edad = 20;

if ($edad >= 18) {
    // echo 'Eres mayor de edad';
} else {
    // echo 'Eres menor de edad';
}

// var_dump((bool) "hola");

// integers 0 = false
// float 0.0 = false
// string '' = false
// array [] = false
// object = false
// null = false
// '0' = false

// Integers

$x = PHP_INT_MAX + 1;

// var_dump($x);

$y = PHP_INT_MIN - 1;

$z = 2_200_000;
$z = 2200000;

//? Floats

$float = 13.5e-3; // 0.0135

$float = 13_000_000e-5; // 130

// var_dump($float);

$x = PHP_FLOAT_MAX + 1;
$y = PHP_FLOAT_MIN + 1;

$z = INF;

//? Strings

$nombre = 'Juan';

$apellido = "Pérez";

$nombre_completo = $nombre . ' ' . $apellido;

$nombre_completo = "$nombre $apellido";

$nombre_completo = "{$nombre} {$apellido}";

$letra = $nombre[1];

// var_dump($letra);

//? Heredoc

$mensaje = <<<EOT
Hola, mi nombre es $nombre
mi apellido es $apellido,
trabajo como programador
EOT;

// echo $mensaje;

//? Heredoc HTML

$html = <<<HTML

<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido $nombre</title>
</head>

HTML;

// echo $html;

//? Destrucción de variables

$nombre = 'David';

unset($nombre);

// var_dump($nombre);

//? Alex a tope con los arrays

$frutas = ['manzana', 'pera', 'naranja'];

$frutas[2] = 'plátano';

$frutas[] = 'sandía';

// var_dump($frutas[3]);

$names = ['David', 'Alex', 'Juan'];

// $names[] = 'Pedro';
array_push($names, 'Pedro', 'Laura', 'María');

// var_dump($names);

//? Arrays asociativos
$stack = [
    'frontend' => 'JavaScript',
    'backend' => 'PHP',
    'database' => 'MySQL'
];

$stack['database'] = 'PostgreSQL';
$stack['framework'] = 'Laravel';

$propiedad = 'style';

$stack[$propiedad] = 'Tailwind';

// var_dump($stack);

//? Arrays multidimensionales

$programmingLanguages = [
    'PHP' => [
        'framework' => 'Laravel',
        'version' => 8.0,
        'isOpenSource' => true,
        'type' => 'backend',
        'extensions' => ['php', 'phtml'],
        'website' => 'https://www.php.net'
    ],
    'JavaScript' => [
        'framework' => 'React',
        'version' => 17,
        'isOpenSource' => true,
        'type' => 'frontend',
        'extensions' => ['js', 'jsx'],
        'website' => 'https://www.javascript.com'
    ],
    'Python' => [
        'framework' => 'Django',
        'version' => 3.9,
        'isOpenSource' => true,
        'type' => 'backend',
        'extensions' => ['py'],
        'website' => 'https://www.python.org'
    ]
];

// var_dump($programmingLanguages['PHP']['framework']);
// var_dump($programmingLanguages['PHP']['extensions'][0]);

// var_dump(array_key_exists('GO', $programmingLanguages));

// Verifica que un índice (clave) exista en un array, retorna true en caso de existir y false en caso contrario
if (array_key_exists('GO', $programmingLanguages)) {

    echo 'El lenguaje de programación GO existe';
}

$array = ['uno', 'dos', 'tres', 'cuatro' => 4];

// var_dump($array);

$david = array_shift($names);

// var_dump($david);

array_unshift($names, $david);

// $names[] = 'David';

unset($names[1]);

$names[1] = 'Alex';

// var_dump($names);

//? Expressions

$m = 10;
$n = "10";

$comparacion = $m == $n;
$comparacion = $m === $n;

// var_dump($comparacion);

//? Operaciones aritméticas

$num = 10;
$num2 = 4;

/* var_dump($num + $num2);
var_dump($num - $num2);
var_dump($num * $num2);
var_dump($num / $num2);
var_dump($num % $num2); */

// Resolver si un número es divisible entre dos y además su resto es 0 utilizando una función
function esDivisible(int $num): bool
{
    return $num % 2 === 0;
}

$result = fn ($num) => $num % 2 === 0;

$resultado = function ($num) {
    return $num % 2 === 0;
};

$num += 2; // $num = $num + 1;
$num -= 1; // $num = $num - 1;
$num *= 2; // $num = $num - 1;

$nombre = 'David';
$nombre .= ' Pérez'; // $nombre = $nombre . ' Pérez';

// var_dump($nombre);

//? Operadores de comparación (==, ===, !=, !==, <, >, <=, >=)

// var_dump(10 > 10);

// var_dump(10 !== '10');

//? Operadores lógicos (&&, ||, !)

$bea = 20;

$mayorEdadBea = $edad >= 18;

$paco = 17;

$mayorEdadPaco = $paco >= 18;

var_dump(!$mayorEdadPaco);
