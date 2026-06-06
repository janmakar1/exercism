package rnatranscription

func ToRNA(dna string) string {
	rna := ""
	for _, nucleotide := range dna {
		rna += dnaNucleotideToRNANucleotide(nucleotide)
	}
	return rna
}

func dnaNucleotideToRNANucleotide(nucleotide rune) string {
	switch nucleotide {
		case 'G':
			return "C"
		case 'C':
			return "G"
		case 'T':
			return "A"
		case 'A':
			return "U"
		default:
			return "?"
	}
}
