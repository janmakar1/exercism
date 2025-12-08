<?php

/*
 * By adding type hints and enabling strict type checking, code can become
 * easier to read, self-documenting and reduce the number of potential bugs.
 * By default, type declarations are non-strict, which means they will attempt
 * to change the original type to match the type specified by the
 * type-declaration.
 *
 * In other words, if you pass a string to a function requiring a float,
 * it will attempt to convert the string value to a float.
 *
 * To enable strict mode, a single declare directive must be placed at the top
 * of the file.
 * This means that the strictness of typing is configured on a per-file basis.
 * This directive not only affects the type declarations of parameters, but also
 * a function's return type.
 *
 * For more info review the Concept on strict type checking in the PHP track
 * <link>.
 *
 * To disable strict typing, comment out the directive below.
 */

declare(strict_types=1);

class Triangle
{
    public function __construct(private float $a, private float $b, private float $c) {
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
        return $this->a > 0 and
            $this->b > 0 and
            $this->c > 0 and
            $this->checkIfTriangleInequalityConditionSatisfied();
    }

    public function kind(): string
    {
        if ($this->a === $this->b or
            $this->a === $this->c or
            $this->b === $this->c) {
            if ($this->a === $this->b and
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

// $tr = new Triangle(10, 20, 30);

// var_dump($tr->a);
// var_dump($tr->b);
// var_dump($tr->c);

// var_dump($tr);