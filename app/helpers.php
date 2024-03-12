<?php

declare(strict_types=1);

/**
 * Format the given amount as a currency
 * 
 * @param float $amount The amount to format
 * @param string $currency The currency to use
 * 
 * @return string The amount formatted as a currency
 */
function formatCurrencyAmount(float $amount, string $currency = '$'): string
{

    $isNegative = $amount < 0;

    return ($isNegative ? "-" : "") . $currency . number_format(abs($amount), 2);
}
