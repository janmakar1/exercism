<?php

declare(strict_types=1);

class HighScores
{
    public array $scores;
    public int $latest;
    public int $personalBest;
    public array $personalTopThree;

    public function __construct(array $scores)
    {
        $this->scores = $scores;
        $this->latest = $scores[array_key_last($scores)];
        arsort($this->scores);

        $this->personalBest = max($this->scores);
        $this->personalTopThree = array_slice($this->scores, 0, 3);
    }
}
