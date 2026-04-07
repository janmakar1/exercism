<?php

declare(strict_types=1);

function flatten_rec(array $input, array &$flattened) {
    foreach ($input as $elem) {
        if (is_array($elem)) {
            flatten_rec($elem, $flattened);
        } elseif (!is_null($elem)) {
            $flattened[] = $elem;
        }
    }
}

function flatten(array $input): array
{
    $flattened = [];
    flatten_rec($input, $flattened);

    return $flattened;
}
