<?php

declare(strict_types=1);

class HighScores
{
    private int $length {
        get {
            return count($this->scores);
        }
    }

    private array $sorted {
        get {
            $temp = array_values($this->scores);
            sort($temp);
            return $temp;
        }
    }

    public int $latest {
        get {
            // since php 8.5:
            // return array_last($this->scores);
            return $this->scores[$this->length-1];
        }
    }
    public int $personalBest {
        get {
            // since php 8.5:
            // return array_last($this->sorted);
            return $this->sorted[$this->length-1];
        }
    }
    public array $personalTopThree{
        get {
            $toTheBest = array_slice(
                $this->sorted,
                max($this->length - 3, 0),
                3
            );
            return array_reverse($toTheBest);
        }
    }

    public function __construct(public array $scores) {
    }
}
