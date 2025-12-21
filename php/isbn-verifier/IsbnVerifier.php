<?php

declare(strict_types=1);

class IsbnVerifier
{
    public function isValid(string $isbn): bool
    {
        if(str_contains($isbn, '-')) {
            $isbn = preg_replace('/\-/', '', $isbn);
        }
        
        $chars = str_split($isbn);
        if(count($chars) != 10) {
            return false;
        }

        $are_chars_valid = array_all($chars, fn($ch) => ctype_digit($ch) or $ch === 'X');
        if (!$are_chars_valid) {
            return false;
        }

        if ($chars[9] === 'X') {
            $chars[9] = 10;
        }

        $d = array_map(fn($str) => (int) $str, $chars);

        $cond = ($d[0] * 10 + 
            $d[1] * 9 +
            $d[2] * 8 + 
            $d[3] * 7 +
            $d[4] * 6 + 
            $d[5] * 5 +
            $d[6] * 4 + 
            $d[7] * 3 +
            $d[8] * 2 + 
            $d[9] * 1 
        ) % 11 === 0;

        return $cond;
    }
}
