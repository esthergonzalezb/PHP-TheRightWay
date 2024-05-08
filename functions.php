<?php
function foo()
{
}
function function_return()
{
    return 'Hello World';
}
function function_param(string $name): string
{
    return "Hello " . $name;
}

function function_default(string $name = "World"): string
{
    return "Hello " . $name;
}

function function_optional(string $name = "World"): string
{
    return "Hello " . $name;
}
echo function_optional();


$usuarios = [
    "Paco" => 25.2,
    "Juan" => 30.3,
    "María" => 15.5,
    "Ana" => 10.5,
    "Pedro" => 20.5,
    "Luis" => 5.5,
    "Daniel" => 50.5,
    "Sara" => 40.5,
    "Lucia" => 35.5,
];
// Realizar una funcion que obtiene el total de la cantidad gastada por todos los usuarios.
function total($usuarios): float
{
    return array_sum($usuarios);
};


//Realizar una funcion que obtiene el total de la cantidad gastada por todos los usuarios con un bucle for
function total2($usuarios): float
{
    $total = 0;
    for ($i = 0; $i < count($usuarios); $i++) {
        $total += $usuarios[$i];
    }
    return $total;
}

// Una funcion que devuelve el usuario que más dinero ha gastado.

function usuarioMas($usuarios): float
{
    return max($usuarios);
}

// Una funcion que devuelve el usuario que menos dinero ha gastado.

function usuarioMenos($usuarios): float
{
    return min($usuarios);
}

// Una funcion que devuelve aleatoriamente el usuario dentro del que mas y menos ha gastado. (sin ser ninguno de ellos)
function usuarioAleatorio($usuarios): float
{
    return rand($usuarios);
}


//! Corrección del profe

function usuariosMenos($usuarios)
{
    $minimo = min($usuarios);
    return array_filter($usuarios, fn ($gasto) => $gasto === $minimo);
}
usuariosMenos($usuarios);

function usuariosMas($usuarios)
{
    $maximo = max($usuarios);
    return array_filter($usuarios, fn ($gasto) => $gasto === $maximo);
}
usuariosMas($usuarios);

function usuarioRandom($usuarios)
{
    $maximo = max($usuarios);
    $minimo = min($usuarios);
    $usuarioMinimoMaximo = array_filter($usuarios, fn ($gasto) => $gasto > $minimo && $gasto < $maximo);
}

//Estos son los gastos
$ejercicio = fn ($usuarios) => [
    "gastoTotal" => array_sum($usuarios),
    "gastoMin" => min($usuarios),
    "gastoMax" => max($usuarios),
    "usuarioAleatorio" => usuarioRandom($usuarios)
];

var_dump($ejercicio($usuarios));


//? Destructuring
$ejercicios = $ejecicio($usuarios);

extract($ejercicios);
var_dump($total, $aleatorio);
