<?php

declare(strict_types=1);

class Triangle
{
    public function __construct(private float $a, private float $b, private float $c)
    {
        if (!$this->checkIfTriangle()) {
            throw new Exception("Triangle conditions do not met");
        }
    }

    private function checkIfTriangleInequalityConditionSatisfied() : bool
    {
        $sides = [$this->a, $this->b, $this->c];
        sort($sides);
        return $sides[0] + $sides[1] > $sides[2];
    }

    private function checkIfTriangle(): bool
    {
        return $this->a > 0 &&
            $this->b > 0 &&
            $this->c > 0 &&
            $this->checkIfTriangleInequalityConditionSatisfied();
    }

    public function kind(): string
    {
        if ($this->a === $this->b ||
            $this->a === $this->c ||
            $this->b === $this->c) {
            if ($this->a === $this->b &&
            $this->a === $this->c) {
                return "equilateral";
            } else {
                return "isosceles";
            }
        } else {
            return "scalene";
        }
    }
}
