<?php

declare(strict_types=1);

function isPangram(string $string): bool
{
    $letters = str_split($string);
    $alphabet = range('a', 'z');
    $zeros = array_fill(0, count($alphabet), 0);
    $occurences = array_combine($alphabet, $zeros);
    
    foreach($letters as $letter) {
        if (ctype_alpha($letter)) {
            $occurences[strtolower($letter)]++;
        }
    }

    return array_all($occurences,fn($value) => $value > 0);
}
// 26:05