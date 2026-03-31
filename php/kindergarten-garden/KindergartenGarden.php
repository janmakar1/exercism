<?php

declare(strict_types=1);

class KindergartenGarden
{
    private static $names = [
        'Alice' => 0,
        'Bob' => 1,
        'Charlie' => 2,
        'David' => 3,
        'Eve' => 4,
        'Fred' => 5,
        'Ginny' => 6,
        'Harriet' => 7,
        'Ileana' => 8,
        'Joseph' => 9,
        'Kincaid' => 10,
        'Larry' => 11,
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
        $idx = static::$names[$student];
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
