<?php

declare(strict_types=1);

function wordCount(string $words): array
{
    $occurences = [];

    $tokens = preg_split(
        '/[\s,[:punct:]]+/',
        $words,
        -1,
        PREG_SPLIT_NO_EMPTY
    );

    foreach ($tokens as $word) {
        if(array_key_exists(strtolower($word), $occurences)) {
            $occurences[strtolower($word)]++;
        } else {
            $occurences[strtolower($word)] = 1;
        }
    }
    return $occurences;
}
