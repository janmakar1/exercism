<?php

declare(strict_types=1);

function transform(array $input): array
{
    $output = [];

    foreach($input as $points => $lettersArray) {
        foreach($lettersArray as $letter) {
            $output[strtolower($letter)] = $points; 
        }
    }

    return $output;
}
