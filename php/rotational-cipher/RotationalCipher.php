<?php

declare(strict_types=1);

class RotationalCipher
{
    public function rotate(string $text, int $shift): string
    {
        $ciphertext = "";
        foreach(str_split($text) as $letter) {
            if (ctype_alpha($letter)) {
                if ($letter === strtolower($letter)) {
                    $offset = ord('a');
                } else {
                    $offset = ord('A');
                }

                $codepoint1 = ord($letter);
                $codepoint2 = ($codepoint1 - $offset + $shift) % 26 + $offset;
                $letter2 = chr($codepoint2);

                $ciphertext .= $letter2;
            } else {
                $ciphertext .= $letter;
            }
        }
        return $ciphertext;
    }
}
