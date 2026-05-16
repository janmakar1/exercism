<?php

declare(strict_types=1);

function flatten(array $input): array {
    $flattened = [];
    foreach($input as $elem) {
        if (is_array($elem)) {
            array_push($flattened, ...flatten($elem) ?? []);
        } elseif (!is_null($elem)) {
            $flattened[] = $elem;
        }
    }

    return $flattened;
}
