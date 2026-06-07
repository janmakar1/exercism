package proteintranslation

import "errors"

var ErrStop = errors.New("ErrStop")
var ErrInvalidBase = errors.New("ErrInvalidBase")

func FromRNA(rna string) ([]string, error) {

	var protein []string

	for {
		if len(rna) == 0 {
			return protein, nil
		}

		if len(rna) < 3 {
			return nil, ErrInvalidBase
		}

		codon := rna[:3]
		aminoAcid, err := FromCodon(codon)

		if err == ErrInvalidBase {
			return nil, err
		}
		if err == ErrStop {
			return protein, nil
		}

		protein = append(protein, aminoAcid)
		rna = rna[3:]

	}
}

func FromCodon(codon string) (string, error) {
	switch codon {
	case "AUG":
		return "Methionine", nil
	case "UUU", "UUC":
		return "Phenylalanine", nil
	case "UUA", "UUG":
		return "Leucine", nil
	case "UCU", "UCC", "UCA", "UCG":
		return "Serine", nil
	case "UAU", "UAC":
		return "Tyrosine", nil
	case "UGU", "UGC":
		return "Cysteine", nil
	case "UGG":
		return "Tryptophan", nil
	case "UAA", "UAG", "UGA":
		return "", ErrStop
	default:
		return "", ErrInvalidBase
	}
}
