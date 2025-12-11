<?php

declare(strict_types=1);

function toRna(string $dna): string
{
    // $nucleotides = str_split($dna);
    // $rna = array_map(
    //     fn($item) => strtr($item, ['G'=>'C', 'C'=>'G', 'A'=>'U', 'T'=>'A']),
    //     $nucleotides
    // );
    // return implode($rna);

    return strtr($dna, 'GCAT', 'CGUA');
}
