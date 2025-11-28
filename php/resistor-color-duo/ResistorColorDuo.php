<?php

declare(strict_types=1);

class ResistorColorDuo
{
    private const COLORS = [
        'black',
        'brown',
        'red',
        'orange',
        'yellow',
        'green',
        'blue',
        'violet',
        'grey',
        'white'
    ];

    private function oneColorCode(string $color): int
    {
        return array_search($color, ResistorColorDuo::COLORS);
    }

    public function getColorsValue(array $colors): int
    {
        return 10 * $this->oneColorCode($colors[0]) + 
            $this->oneColorCode($colors[1]);

    }
}

/*
    $s = 0;
    $reversed = array_reverse($colors);
    foreach ($reversed as $d => $color) {
        $s += 10 ** $d * $this->oneColorCode($color);
    }
    return $s;

*/
