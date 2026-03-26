<?php

declare(strict_types=1);

class DndCharacter
{
    public $strength;
    public $dexterity;
    public $constitution;
    public $intelligence;
    public $wisdom;
    public $charisma;
    public $hitpoints;

    public function __construct()
    {
        $this->strength = $this->calculateDices();
        $this->dexterity = $this->calculateDices();
        $this->constitution = $this->calculateDices();
        $this->intelligence = $this->calculateDices();
        $this->wisdom = $this->calculateDices();
        $this->charisma = $this->calculateDices();

        $this->hitpoints = 10 + static::modifier($this->constitution);
    }

    public static function modifier(int $score): int
    {
        return (int) floor(($score - 10) / 2);
    }

    public static function ability(): int
    {
        $dnd = new DndCharacter();

        $all_abilities = [$dnd->strength,
            $dnd->dexterity,
            $dnd->constitution,
            $dnd->intelligence,
            $dnd->wisdom,
            $dnd->charisma,
        ];
        shuffle($all_abilities);

        return $all_abilities[0];
    }

    public static function generate(): DndCharacter
    {
        return new DndCharacter();
    }

    private function rollDice(): array
    {
        $single_scores = [];
        for ($i = 0; $i < 4; ++$i) {
            $single_scores[] = random_int(1, 6);
        }
        $minimum = min($single_scores);
        $min_key = array_find_key(
            $single_scores,
            function ($val) use ($minimum) { return $val === $minimum; }
        );
        unset($single_scores[$min_key]);

        return $single_scores;
    }

    private function calculateDices(): int
    {
        $scores = $this->rollDice();

        return array_sum($scores);
    }
}
