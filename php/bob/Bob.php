<?php

declare(strict_types=1);

class Bob
{
    public function respondTo(string $str): string
    {
        $str = trim($str);

        $is_question = fn ($s) => str_ends_with($s, '?');
        $is_shouting = fn ($s) => strtoupper($s) === $s;
        $has_letters = fn ($s) => array_any(str_split($s), fn($ch) => ctype_alpha($ch));
        $is_white_space = fn ($s) => array_all(str_split($s), fn($ch) => ctype_space($ch));

        return match(true) {
            $is_white_space($str) => 'Fine. Be that way!',
            ($is_question($str) && $is_shouting($str) && $has_letters($str)) => "Calm down, I know what I'm doing!",
            $is_question($str) => 'Sure.',
            ($is_shouting($str) && $has_letters($str)) => 'Whoa, chill out!',
            default => 'Whatever.'
        };

    }
}
