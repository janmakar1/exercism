<?php

declare(strict_types=1);

class ProteinTranslation
{
    private const CODON_TO_PROTEIN = [
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
        "UAA" => self::STOP,
        "UAG" => self::STOP,
        "UGA" => self::STOP,
    ];
    private const INVALID_CODON = "not really a codon :D";
    private const STOP = "STOP";

    public function getProteins(string $codons): array
    {
        $proteins = [];

        foreach(str_split($codons, 3) as $codon) {
            $protein = static::CODON_TO_PROTEIN[$codon] ?? static::INVALID_CODON;
            if ($protein === static::STOP) {
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
