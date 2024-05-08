<?php
function hacerClick()
{
    var_dump('click');
}
register_tick_function("hacerClick"); // Cada vez que haya una iteración se ejecuta el buble

declare(ticks=3);

for ($i = 0; $i < 10; $i++) {
    echo $i . PHP_EOL;
}
// Devuelve datos

function realizarCalculos(mixed $x, mixed $y): mixed
{
    return [
        "suma" => $x + $y,
        "resta" => $x - $y,
        "multiplicacion" => $x * $y,
        "division" => $x / $y
    ];
};
