{
  proteins: (strand) ->
    t = {
      AUG: 'Methionine'
      UUU: 'Phenylalanine'
      UUC: 'Phenylalanine'
      UUA: 'Leucine'
      UUG: 'Leucine'
      UCU: 'Serine'
      UCC: 'Serine'
      UCA: 'Serine'
      UCG: 'Serine'
      UAU: 'Tyrosine'
      UAC: 'Tyrosine'
      UGU: 'Cysteine'
      UGC: 'Cysteine'
      UGG: 'Tryptophan'
      UAA: 'STOP'
      UAG: 'STOP'
      UGA: 'STOP'
    }
    protein = {}

    there_is_rest = #strand % 3 != 0

    index = 1
    for rna in string.gmatch(strand, '...')
      if t[rna] == nil
      	error "Invalid codon"
      if t[rna] == 'STOP'
        return protein
      table.insert(protein, index, t[rna])
      index += 1

    if there_is_rest
      error "Invalid codon"

    return protein
}
