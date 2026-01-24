<?php

declare(strict_types=1);

class ProteinTranslation
{
    const CODON_TO_PROTEIN = [
        "AUG" => "Methionine",
        "UUU" => "Phenylalanine",
        "UUC" => "Phenylalanine",
        "UUA" => "Leucine",
        "UUG" => "Leucine",
        "UCU" => "Serine",
        "UCC" => "Serine",
        "UCA" => "Serine",
        "UCG" => "Serine",
        "UAU" => "Tyrosine",
        "UAC" => "Tyrosine",
        "UGU" => "Cysteine",
        "UGC" => "Cysteine",
        "UGG" => "Tryptophan",
        "UAA" => "STOP",
        "UAG" => "STOP",
        "UGA" => "STOP",
    ];
    const INVALID_CODON = -1;

    public function getProteins(string $codons): array
    {
        $proteins = [];
        $codonsArray = str_split($codons, 3);

        foreach($codonsArray as $codon) {
            $protein = static::CODON_TO_PROTEIN[$codon] ?? static::INVALID_CODON;
            if ($protein === "STOP") {
                break;
            } else if ($protein === static::INVALID_CODON) {
                throw new InvalidArgumentException("Invalid codon");
            } else {
                $proteins[] = $protein;
            }
        }

        return $proteins;
    }
}
