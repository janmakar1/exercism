<?php

declare(strict_types=1);

function slices(string $digits, int $series): array
{
    if ($series > strlen($digits)){
        throw new Exception('too big length of a substring');
    } 
    if ($series === 0){
        throw new Exception('substring has to have some length (must be bigger than 0)');
    } 

    $result_series = [];
    for ($offset=0; $offset < strlen($digits); $offset++) { 
        
        $substring = substr($digits, $offset, length: $series);
        if (strlen($substring) !== $series) {
            break;
        }
        $result_series[] = $substring;
    }

    return $result_series;
}
