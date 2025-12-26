<?php

declare(strict_types=1);

class TwelveDays
{
    const LYRICS = [
        1 => "a Partridge in a Pear Tree.",
        "two Turtle Doves, and ",
        "three French Hens, ",
        "four Calling Birds, ",
        "five Gold Rings, ",
        "six Geese-a-Laying, ",
        "seven Swans-a-Swimming, ",
        "eight Maids-a-Milking, ",
        "nine Ladies Dancing, ",
        "ten Lords-a-Leaping, ",
        "eleven Pipers Piping, ",
        "twelve Drummers Drumming, ",
    ];

    const NUMERALS = [
        1 => "first",
        "second", 
        "third",
        "fourth",
        "fifth",
        "sixth",
        "seventh",
        "eighth",
        "ninth",
        "tenth",
        "eleventh",
        "twelfth"
    ];

    const BEGINNING = "On the %s day of Christmas my true love gave to me: ";
    
    public function recite(int $start, int $end): string
    {
        $song = "";

        for ($verse_idx=$start; $verse_idx <= $end; $verse_idx++) { 
            $song .= sprintf(static::BEGINNING, static::NUMERALS[$verse_idx]);

            for($gift_idx = $verse_idx; $gift_idx > 0; $gift_idx--) {
                $song .= static::LYRICS[$gift_idx];
            }
            
            if ($verse_idx !== $end) {
                $song .= PHP_EOL;
            }

        }
        return $song;
    }
}
