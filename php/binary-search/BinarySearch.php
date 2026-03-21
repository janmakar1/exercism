<?php

declare(strict_types=1);

function find(int $needle, array $haystack): int
{
    $needle_idx = -1;
    while (count($haystack) > 0) {
        $mid_idx = (int)floor(count($haystack) / 2);
        $mid = $haystack[$mid_idx];
        if ($mid === $needle) {
            $needle_idx = $mid_idx;
            return $needle_idx;
        } elseif ($mid > $needle) {
            $haystack = array_slice($haystack, 0, $mid_idx);
        } elseif ($mid < $needle) {
            $haystack = array_slice($haystack, $mid_idx + 1);
        }
    }

    return $needle_idx;
}

