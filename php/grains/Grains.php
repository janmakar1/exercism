<?php

declare(strict_types=1);

function square(int $number): string
{
    if ($number <= 0 or $number > 64)
    {
        throw new InvalidArgumentException("Argument should be in range(0-64>");
    }
    
    return sprintf ("%u", 2 ** ($number - 1));
}

function total(): string
{
    return '18446744073709551615';
}