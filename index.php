<?php

declare(strict_types=1); // Strict types elimina una fucnion de PHP que se llama loose typing de PHP

//? Variables constantes y variables
$veinte = 20;
const ESTADO_PAGADO = 'paid';
const ESTADO_PENDIENTE = 'pendiente';
//  const ESTADO_DEUDA = $veinte > 2;  //  Una variable no puede depender de const, con lo cual esto no funcionaria.

define("ESTADO_DEUDA", "deuda"); // También se puede usar define para definir constante
echo ESTADO_DEUDA;


//? Constantes mágicas

var_dump(PHP_VERSION);

var_dump(__FILE__); //Indica el archivo donde se ejecuta el php

var_dump(__LINE__); //Indica la línea donde se ejecuta el php

//TODO. Variables

$algo = "bar"; //Almacena  string

$algo = 20; //Almacena  entero

$algo = 20.5; //Almacena  flotante (float) decimal 

$var = "buz";

$$var = "baz"; // Lo que hace esto es que el valor que se da, se transforma en variable, es decir ahora $buz = "baz";

//? Castings, tipos de datos

$decimal = 20.25;

$entero  = (int) $decimal;

$cadena  = "veinte años";

$entero  = (int) $cadena;

$completed = true;

$entero = (int) $completed;

var_dump($entero); // Si un cast falla, te devuelve un false o 0 

//TODO Tipos compuestos (array, objeto, callable (function))

$puntuacion = [10, 20, 30, 40];
$mixtos = [10, "20", 3.5, true];

$objetos = new stdClass(); //Objeto vacío

//Callable (funciones)

// Función anónima
$fn = function () {
    return "Hola";
};

// O también (función flecha)

$fn = fn () => "Hola";

//Tipo especial NULL
var_dump(null); //Este espacio de memoria no tiene ningún valor

//? Strict types elimina una fucnion de PHP que se llama loose typing de PHP; convertirlo en strong typing
$sum = function (int $a, int $b): int {
    return $a + $b;
};
var_dump($sum(10.5, 20));

//? Booleanos 
$completed = true;

if ($completed) {
    echo "La tarea está completa";
} else {
    echo "La tarea está pendiente";
}

$edad = 20;
if ($edad >= 18) {
    echo "Eres mayor de edad";
} else {
    echo "Eres menor de edad";
}

if (20) {
    echo "20 es verdadero";
} else {
    echo "20 es falso";
} //Esto es porque los valores mayores de 0 son verdaderos

if ("") {
    echo "Cadena vacía es verdadera";
} else {
    echo "Cadena vacía es falsa";
} // En este caso, las cadenas vacías son falsas

//Otra forma de poner boleanos
var_dump((bool) "hola"); // Esto devuelve un true creo

//? Ejemplos de false

/* integers 0= false
float 0.0 = false
string "" = false
array [] = false
object with no properties = false
null = false
"0" = false */

//?Integers

$x = PHP_INT_MAX; //Indica el número máximo con el que puede trabajar PHP
$y = PHP_INT_MIN; //Indica el número mínimo con el que puede trabajar PHP

//? Floats

$float = 13.5e-3; // 00.0135
$float = 13_000_000e-5; // 130

$x = PHP_FLOAT_MAX;
$x = PHP_FLOAT_MIN;
$x = INF; //Infinito

//? Strings
$nombre = "Juan";
$apellidos = "Pérez";
$nombreCompleto = $nombre . " " . $apellidos;
$nombreCompleto = "$nombre $apellidos";
$letra = $nombre[0]; // Saca la letra 0 del dato de la variable, es este caso 'J'

//? Heredoc
$mensaje = <<<EOT
Hola mi nombre es $nombre, 
mi apellido es $aepllido 
y soy programador
EOT;

echo $mensaje;

//? Heredoc HTML
$html = <<<HTML
<h1>Hola $nombre</h1>
HTML; //Sirve para poner bloques de HTML, aunque no se suele usar

//? Destruccion de variables

unset($nombre);

//? Arrays (memoria(?))

$frutas = ["manzana", "banana", "naranja"];

$frutas[] = "sandía"; // Se añade al final del array

echo $frutas[2]; //Me sacará "naranja", si pongo [7] no existirá y pondra null

$names = ["David", "Alex", "Juan"];
array_push($names, "Pedro"); //Añade al final del array el nuevo nombre
array_push($names, ["María", "Paula"]); //Añade al final del array los nombres

//? Arrays asociativos
$stack = [
    "frontend" => "Javascript",
    "backend" => "PHP",
    "baseDatos" => "mySQL",
];

$stack["baseDatos"] = "SQL"; //Cambia el valor del array
$stack["framework"] = "Laravel"; //Añade un nuevo dato al array asociativo

$propiedad = "style";

$stack[$propiedad] = "CSS"; //Añade un nuevo dato al array asociativo a partir de una variable

var_dump($stack);

//? Array multidimensionales

$lenguajesProgramacion = [
    "PHP" => [
        "framework" => "Laravel",
        "version" => 8.0,
        "isOpenSource" => true,
        "type" => "backend",
        "extensions" => ["php", "phtml"],
        "website" => "www.php.net",
    ],
    "JavaScript" => [
        "framework" => "React",
        "version" => 17,
        "isOpenSource" => true,
        "type" => "frontend",
        "extensions" => ["js", "jsx"],
        "website" => "www.javascript.com",
    ],
    "Python" => [
        "framework" => "Django",
        "version" =>  3.9,
        "isOpenSource" => true,
        "type" => "backend",
        "extensions" => ["py"],
        "website" => "www.python.org",
    ]

];

var_dump($lenguajesProgramacion["Python"]["type"]); //Devuelve "backend"
var_dump($lenguajesProgramacion["JavaScript"]["extensions"][1]); //Devuelve "phtml"

// Verifica si una clave existe o no en el array; true si existe, false si no
array_key_exists("GO", $lenguajesProgramacion); // Devuelve false porque no existe

if (array_key_exists("GO", $lenguajesProgramacion)) {
    echo "GO existe";
} else {
    echo "GO no existe";
}

// Devuelve el primer elemento del array, y lo elimina del array
array_shift($names); // En este caso, devuelve David, y lo elimina del array
array_unshift($names, "David"); // Anñde David al principio del array

//Sin embargo si pusieramos 
$names[] = "David"; //Lo añadiría al final del array

unset($names[1]); //Elimina el elemento en la posicion 1


//? Expressions
$m = 10;
$n = 5;
$j = "10";

$comparacion = $m == $n;
$comparacion1 = $m == $j;
$comparacion2 = $m === $j;

var_dump($comparacion); //Devuelve un "false", porque no es verdad
var_dump($comparacion1); //Saldría "true" porque en valor es igual
var_dump($comparacion2); //Saldría "false" porque no es una igualdad estricta, es decir, el valor y el tipo son diferentes


//Funcion para resolver si un numero es divisible entre dos y el resto es 0

function esDivisible(int $num): bool
{
    return $num % 2 == 0;
}
$result = fn ($num) => $num % 2 == 0;
$resultado = function ($num) {
    return $num % 2 == 0;
};

$nombre .= "Pérez"; //$nombre = $nombre . "Pérez";

//? Operadores de comparacion (==, ===, !==, !===, < ,> , =<, >=)

//? Operadores lógicos (&& ("y"), || ("o"), !(negación))
$bea = 20;
$mayorEdadBea = $edad >= 18;
$paco = 17;
$mayorEdadPaco = $paco >= 18;

var_dump($mayorEdadBea && $mayorEdadPaco); // Esto retorna un false, porque Paco no es mayor de edad
var_dump($mayorEdadBea || $mayorEdadPaco); // Esto retorna un true, porque Bea es mayor aunque Paco no lo sea
var_dump(!$mayorEdadBea); // Esto retorna un false, porque niega que Bea sea mayor de edad, pero sí lo es