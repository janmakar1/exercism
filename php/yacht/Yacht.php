<?php

declare(strict_types=1);

class Yacht
{
    private const CATEGORIES = [
        'ones',
        'twos',
        'threes',
        'fours',
        'fives',
        'sixes',
        'full house',
        'four of a kind',
        'little straight',
        'big straight',
        'choice',
        'yacht'
    ];

    private function score_numbers(array $rolls, int $number): int
    {
        $ones = array_filter($rolls, fn($val) => $val === $number);
        return count($ones) * $number;
    }

    private function score_yacht(array $rolls): int
    {
        foreach (range(1, 6) as $value) {
            $is_yacht_of_value = array_all($rolls, fn ($x) => $x === $value);
            if ($is_yacht_of_value === true) {
                return 50;
            }
        }
        return 0;
    }

    private function score_little_straight(array $rolls): int
    {
        sort($rolls);
        $scored = $rolls === [1, 2, 3, 4, 5];
        return $scored ? 30 : 0;
    }

    private function score_big_straight(array $rolls): int
    {
        sort($rolls);
        $scored = $rolls === [2, 3, 4, 5, 6];
        return $scored ? 30 : 0;
    }
    
    private function not_finished(): int{
        throw new \BadMethodCallException(sprintf('Implement the %s method', __FUNCTION__));
    }

    public function score(array $rolls, string $category): int
    {
        return match($category) {
            'ones' => $this->score_numbers($rolls, 1),
            'twos' => $this->score_numbers($rolls, 2),
            'threes' => $this->score_numbers($rolls, 3),
            'fours' => $this->score_numbers($rolls, 4),
            'fives' => $this->score_numbers($rolls, 5),
            'sixes' => $this->score_numbers($rolls, 6),
            'full house' => $this->not_finished(),
            'four of a kind' => $this->not_finished(),
            'little straight' => $this->score_little_straight($rolls),
            'big straight' => $this->score_big_straight($rolls),
            'choice' => array_sum($rolls),
            'yacht' => $this->score_yacht($rolls),
            default => $this->not_finished(),
        };
    }
}


// $yacht = new Yacht();

// 37:09