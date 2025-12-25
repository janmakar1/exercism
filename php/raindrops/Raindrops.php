<?php

declare(strict_types=1);

function raindrops(int $number): string
{
    $result = "";
    $isDivisable = false;
    if ($number % 3 === 0) {
        $result .= "Pling";
        $isDivisable = true;
    }
    if ($number % 5 === 0) {
        $result .= "Plang";
        $isDivisable = true;
    }
    if ($number % 7 === 0) {
        $result .= "Plong";
        $isDivisable = true;
    }

    if ($isDivisable === false) {
        $result = (string) $number;
    }

    return $result;
}
