<?php

declare(strict_types=1);

function placeQueen(int $xCoordinate, int $yCoordinate): bool
{
    if ($xCoordinate < 0 or $yCoordinate < 0) {
        throw new InvalidArgumentException('The rank and file numbers must be positive.');
    }
    if ($xCoordinate >= 8 or $yCoordinate >= 8) {
        throw new InvalidArgumentException('The position must be on a standard size chess board.');
    }
    return true;

}

function canAttack(array $whiteQueen, array $blackQueen): bool
{
    [$xWhiteQueen, $yWhiteQueen] = $whiteQueen;
    [$xBlackQueen, $yBlackQueen] = $blackQueen;

    $xDiff = abs($xWhiteQueen - $xBlackQueen); 
    $yDiff = abs($yWhiteQueen - $yBlackQueen); 

    return $xDiff === $yDiff or $xDiff === 0 or $yDiff === 0;
}
