<?php

declare(strict_types=1);

class Proverb
{
    public function recite(array $words)
    {
        if (count($words) === 0) {
            return [];
        }

        $proverb = [];
        for ($idx = 0, $maxIndex = count($words)-1; $idx < $maxIndex; $idx++) {
            $verse = "For want of a {$words[$idx]} the {$words[$idx+1]} was lost.";
            $proverb[] = $verse;
        }
        $proverb[] = "And all for the want of a {$words[0]}.";
        return $proverb;
    }
}
