<?php

declare(strict_types=1);

class Bob
{
    public function respondTo(string $str): string
    {
        $str = trim($str);

        $is_question = str_ends_with($str, '?');
        $is_shouting = strtoupper($str) === $str;
        $has_letters = array_any(str_split($str), fn($ch) => ctype_alpha($ch));
        $is_white_space = array_all(str_split($str), fn($ch) => ctype_space($ch));

        if ($is_white_space) {
            return 'Fine. Be that way!';
        } elseif ($is_question && $is_shouting && $has_letters) {
            return 'Calm down, I know what I\'m doing!';
        } elseif ($is_question) {
            return 'Sure.';
        } elseif ($is_shouting && $has_letters) {
            return 'Whoa, chill out!';
        } else {
            return 'Whatever.';
        }
    }
}
