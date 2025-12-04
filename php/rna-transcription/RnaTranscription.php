<?php

declare(strict_types=1);

function toRna(string $dna): string
{
    $rna = '';
    $dna_array = str_split($dna);
    foreach ($dna_array as $d) {
        $r = match ($d) {
            'G' => 'C',
            'C' => 'G',
            'A' => 'U',
            'T' => 'A',
            '' => ''
        };
        $rna .= $r;
    }
    return $rna;
}
