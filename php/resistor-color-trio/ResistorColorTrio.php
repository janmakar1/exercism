<?php

declare(strict_types=1);

class ResistorColorTrio
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
    private const UNITS = [
        ['ohms', 1],
        ['ohms', 10],
        ['ohms', 100],
        ['kiloohms', 1],
        ['kiloohms', 10],
        ['kiloohms', 100],
        ['megaohms', 1],
        ['megaohms', 1],
        ['megaohms', 1],
        ['gigaohms', 1]
    ];


    private function oneColorCode(string $color): int
    {
        return array_search($color, $this::COLORS);
    }

    private function lastColorCode(string $color): int
    {
        $idx = array_search($color, $this::COLORS);
        $value = $this::UNITS[$idx][1];
        return $value; 
    }

    private function ohms(string $color): string
    {
        $idx = array_search($color, $this::COLORS);
        $value = $this::UNITS[$idx][0];
        return $value;
    }

    private function handleOverflow(&$value, &$ohms): void
    {
        $value /= 1000;
        if ($ohms === 'ohms') {
            $ohms = 'kiloohms';
        } elseif ($ohms === 'kiloohms') {
            $ohms = 'megaohms';
        } elseif ($ohms === 'megaohms') {
            $ohms = 'gigaohms';
        }
    }

    public function label(array $colors): string
    {
        $totalValue = ($this->oneColorCode($colors[0]) * 10 +
            $this->oneColorCode($colors[1])) *
            $this->lastColorCode($colors[2]);
        $ohms = $this->ohms($colors[2]);
        if ($totalValue !== 0 and $totalValue % 1000 === 0) {
            echo strtoupper("overflow in kilos!") . PHP_EOL;
            echo $totalValue . PHP_EOL;
            $this->handleOverflow($totalValue, $ohms);
        }
        return sprintf(
            "%d %s",
            $totalValue,
            $ohms,
        );
    }
}
