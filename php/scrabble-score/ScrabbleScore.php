<?php

declare(strict_types=1);

const LETTERS = [
    1 => ['A', 'E', 'I', 'O', 'U', 'L', 'N', 'R', 'S', 'T'],
    2 => ['D', 'G'],
    3 => ['B', 'C', 'M', 'P'],
    4 => ['F', 'H', 'V', 'W', 'Y'],
    5 => ['K'],
    8 => ['J', 'X'],
    10 => ['Q', 'Z'],
];

function score_one_letter($letter) {
    if (!ctype_alpha($letter)) {
        throw new Exception("$letter is not alpha letter!");
        return 0;
    }
    foreach(LETTERS as $points => $letters_row) {
        if (in_array(strtoupper($letter), $letters_row)) {
            return $points;
        }
    }
}

function score(string $word): int
{
    $s = 0;
    foreach(str_split($word) as $letter) {
        $s += score_one_letter($letter);
    }
    
    return $s;
}
