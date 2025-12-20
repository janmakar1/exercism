<?php

declare(strict_types=1);

function isArmstrongNumber(int $number): bool
{
    $orygn_number = $number;
    $digits = [];
    while ($number >= 10) {
        $digit = $number % 10;
        $number = intdiv($number, 10);
        $digits[] = $digit;
    }
    $digits[] = $number;
    $nb_of_digits = count($digits);

    $armstrong_condition = 0;
    foreach($digits as $digit) {
        $armstrong_condition += $digit ** $nb_of_digits;
    }

    return $armstrong_condition === $orygn_number;
}
