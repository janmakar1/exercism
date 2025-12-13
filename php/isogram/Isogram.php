<?php

declare(strict_types=1);

function isIsogram(string $word): bool
{
    $histogram = [];
    foreach(str_split($word) as $letter) {
        if (!ctype_alpha($letter)) {
            continue;
        } elseif (in_array(strtolower($letter), $histogram)) {
            return false;
        } else {
            $histogram[] = strtolower($letter);
        }

    }
    return true;
}
