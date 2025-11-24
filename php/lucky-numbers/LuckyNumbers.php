<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        $number1 = (int) implode($digitsOfNumber1);
        $number2 = (int) implode($digitsOfNumber2);
        return $number1 + $number2;
    }

    public function isPalindrome(int $number): bool
    {
        return strrev($number) === (string) $number;
    }

    public function validate(string $input): string
    {
        if ($input === "") {
            return "Required field";
        } else {
            $inputNumber = (int) $input;
            if ($inputNumber > 0) {
                return "";
            } else {
                return "Must be a whole number larger than 0";
            }
        }
    }
}
