<?php

declare(strict_types=1);

function maskify(string $cc): string
{
    if ($cc === '') {
        return '';
    }
    if (strlen($cc) < 6) {
        return $cc;
    }

    $ar = str_split($cc);

    $result = '';
    foreach ($ar as $key => $value) {
        if ($key === 0 or
            in_array($key, range(count($ar)-4, count($ar) -1 )) or
            $value === '-') {
                $result .= $value;
        } else {
            $result .= '#';
        }
    }
    return $result;

}
