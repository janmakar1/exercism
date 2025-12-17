<?php

declare(strict_types=1);

function nucleotideCount(string $input): array
{
    $count = [
        'a' => 0,
        'c' => 0,
        't' => 0,
        'g' => 0,
    ];

    foreach(str_split($input) as $nucleotide) {
        if (str_contains('ACGTacgt', $nucleotide)) {
            $count[strtolower($nucleotide)]++;
        } else {
            throw new Exception("Unknown nucleotide");
        }
        
    }
    return $count;
}
