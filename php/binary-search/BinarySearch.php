<?php

declare(strict_types=1);

function find(int $needle, array $haystack): int
{
    $haystack2 = array_map(
        fn (int $key, int $item) => [ "value" => $item, "oryg_key" => $key ],
        array_keys($haystack),
        array_values($haystack),
    );

    while (count($haystack2) > 0) {
        $mid_idx = (int)floor(count($haystack2) / 2);
        $mid = $haystack2[$mid_idx]["value"];
        if ($mid === $needle) {
            $oryg_key_of_needle = $haystack2[$mid_idx]["oryg_key"];
            return $oryg_key_of_needle;    
        } elseif ($mid > $needle) {
            $haystack2 = array_slice($haystack2, 0, $mid_idx, preserve_keys: false);
        } else {
            $haystack2 = array_slice($haystack2, $mid_idx + 1, preserve_keys: false);
        }
    }

    return -1;
}
