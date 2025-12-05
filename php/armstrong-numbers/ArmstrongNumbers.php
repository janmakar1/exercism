<?php

declare(strict_types=1);

function isArmstrongNumber(int $number): bool
{
    $digits = str_split((string) $number);
    $nb_of_digits = strlen((string) $number);
    $armstrong_condition = 0;
    foreach($digits as $digit) {
        $armstrong_condition += ((int) $digit) ** $nb_of_digits;
    }
    return $number === $armstrong_condition;
}
