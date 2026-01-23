<?php

declare(strict_types=1);

const LETTERS = [
    'A' => 1,
    'E' => 1,
    'I' => 1,
    'O' => 1,
    'U' => 1,
    'L' => 1,
    'N' => 1,
    'R' => 1,
    'S' => 1,
    'T' => 1,
    'D' => 2,
    'G' => 2,
    'B' => 3,
    'C' => 3,
    'M' => 3,
    'P' => 3,
    'F' => 4,
    'H' => 4,
    'V' => 4,
    'W' => 4,
    'Y' => 4,
    'K' => 5,
    'J' => 8,
    'X' => 8,
    'Q' => 10,
    'Z' => 10,
];

/* needs to be uncommented if the last solution will be used */
// function score_one_letter($letter) {
//     return LETTERS[strtoupper($letter)];
// }

function score(string $word): int
{
    return array_reduce(
        str_split($word),
        fn($carry, $letter) => $carry + LETTERS[strtoupper($letter)],
        0
    );

    // return array_map(fn($x) => LETTERS[strtoupper($x)], str_split($word))
    // |> array_sum(...);

    /* proposed solution */
    // return array_map(score_one_letter(...), str_split($word))
    // |> array_sum(...);
}
