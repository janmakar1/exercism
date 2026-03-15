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
    // $sum = 0;
    // foreach(range(1, 64) as $number) {
    //     $sum += square($number);
    // }
    // return (string) $sum; // returns scientific notation e+
    
    // return sprintf ("%u", $sum); // returns 0

    /*returns number 1 greater that the correct value
    and with leading zeros */
    // $with_dot_and_zeros = sprintf("%f", floor($sum));
    // $parts = explode(".", $with_dot_and_zeros);
    // return $parts[0];

    // return '18446744073709551615'; // xD

    // return sprintf("%u", 2 ** 64 - 1); // that one also returns 0 
    // - so probably issue is with the ints overflowing int range

    return trim(shell_exec('echo "2 ^ 64 - 1" | bc'));
}