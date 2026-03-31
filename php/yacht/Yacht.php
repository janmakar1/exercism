<?php

declare(strict_types=1);

class Yacht
{
    public function score(array $rolls, string $category): int
    {
        sort($rolls);

        return match ($category) {
            'ones' => $this->score_numbers($rolls, 1),
            'twos' => $this->score_numbers($rolls, 2),
            'threes' => $this->score_numbers($rolls, 3),
            'fours' => $this->score_numbers($rolls, 4),
            'fives' => $this->score_numbers($rolls, 5),
            'sixes' => $this->score_numbers($rolls, 6),
            'full house' => $this->score_full_house($rolls),
            'four of a kind' => $this->score_four_of_kind($rolls),
            'little straight' => $this->score_little_straight($rolls),
            'big straight' => $this->score_big_straight($rolls),
            'choice' => array_sum($rolls),
            'yacht' => $this->score_yacht($rolls),
        };
    }

    private function score_numbers(array $rolls, int $number): int
    {
        $counted_values = array_count_values($rolls);
        $counted_values_of_number = $counted_values[$number] ?? 0;

        return $counted_values_of_number * $number;
    }

    private function are_equal(int ...$numbers)
    {
        $first_number = $numbers[0];
        foreach ($numbers as $number) {
            if ($number !== $first_number) {
                return false;
            }
        }

        return true;
    }

    private function score_full_house(array $rolls): int
    {
        if ($this->are_equal($rolls[0], $rolls[1], $rolls[2])
            && $this->are_equal($rolls[3], $rolls[4])) {
            if ($this->are_equal($rolls[0], $rolls[3])) {
                // "yacht is not a full house" case
                return 0;
            }

            return array_sum($rolls);
        }
        if ($this->are_equal($rolls[0], $rolls[1])
        && $this->are_equal($rolls[2], $rolls[3], $rolls[4])) {
            if ($this->are_equal($rolls[0], $rolls[2])) {
                // "yacht is not a full house" case
                return 0;
            }

            return array_sum($rolls);
        }

        return 0;
    }

    private function score_four_of_kind(array $rolls): int
    {
        if ($this->are_equal($rolls[0], $rolls[1], $rolls[2], $rolls[3])) {
            return array_sum(array_slice($rolls, 0, 4));
        }
        if ($this->are_equal($rolls[1], $rolls[2], $rolls[3], $rolls[4])) {
            return array_sum(array_slice($rolls, 1, 4));
        }

        return 0;
    }

    private function score_little_straight(array $rolls): int
    {
        $scored = $rolls === [1, 2, 3, 4, 5];

        return $scored ? 30 : 0;
    }

    private function score_big_straight(array $rolls): int
    {
        $scored = $rolls === [2, 3, 4, 5, 6];

        return $scored ? 30 : 0;
    }

    private function score_yacht(array $rolls): int
    {
        foreach (range(1, 6) as $value) {
            $is_yacht_of_value = array_all($rolls, fn ($x) => $x === $value);
            if (true === $is_yacht_of_value) {
                return 50;
            }
        }

        return 0;
    }
}
