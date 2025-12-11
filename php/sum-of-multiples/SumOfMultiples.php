<?php

declare(strict_types=1);

function sumOfMultiples(int $number, array $multiples): int
{
    $array2d = [];
    foreach ($multiples as $multiple) {
        if ($multiple === 0) {
            continue;
        }
        if ($number < $multiple) {
            continue;
        }
        $arrayOfMultiples = range(0, $number - 1, $step=$multiple);
        var_dump($arrayOfMultiples);
        $array2d[] = $arrayOfMultiples;
    }

    if ($array2d === []) {
        return 0;
    }

    $union = $array2d[0];
    for ($i=0; $i < count($array2d); $i++) { 
        $union = array_unique(array_merge($union, $array2d[$i]));
    }
    return array_sum($union);
}
