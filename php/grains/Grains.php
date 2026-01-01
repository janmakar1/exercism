<?php

declare(strict_types=1);

function square(int $number): string
{
    if ($number <= 0 or $number > 64)
    {
        throw new InvalidArgumentException("Argument should be in range(0-64>");
    }
    
    return (string) (2 ** ($number - 1));
}

function total(): string
{
    $sum = 0;
    foreach(range(1, 64) as $number) {
        $sum += square($number);
    }
    return (string) $sum;
}
