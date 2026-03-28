<?php

declare(strict_types=1);

class KindergartenGarden
{
    private static $names = [
        0 => 'Alice',
        1 => 'Bob',
        2 => 'Charlie',
        3 => 'David',
        4 => 'Eve',
        5 => 'Fred',
        6 => 'Ginny',
        7 => 'Harriet',
        8 => 'Ileana',
        9 => 'Joseph',
        10 => 'Kincaid',
        11 => 'Larry'
    ];

    private static $plants = [
        'G' => 'grass',
        'C' => 'clover',
        'R' => 'radishes',
        'V' => 'violets'
    ];

    public function __construct(private string $diagram) {
    }

    public function plants(string $student): array
    {
        $idx = array_find_key(static::$names, fn($val) => $val === $student);
        $verses = explode("\n", $this->diagram);
        $chars = array_map(fn($verse) => str_split($verse, 1), $verses);

        $letters = [
            $chars[0][2*$idx],
            $chars[0][2*$idx+1],
            $chars[1][2*$idx],
            $chars[1][2*$idx+1],
        ];
        $plants_full_names = array_map(fn($letter) => static::$plants[$letter], $letters);
        return $plants_full_names;
    }
}
