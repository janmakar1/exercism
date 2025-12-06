<?php

declare(strict_types=1);

function acronym(string $text): string
{
    $words = preg_split("/[\s-]+/", $text);
    $letters = array_map(fn($word) => strtoupper($word[0]), $words);
    return implode($letters);
}
