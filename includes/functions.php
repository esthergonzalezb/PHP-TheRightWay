<?php

declare(strict_types=1);

function debuggear(mixed $data, bool $stopExecution = false)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';

    if ($stopExecution) {
        exit;
    }
}
