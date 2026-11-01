const dict: Record<string, string> = {
  'AUG': 'Methionine',
  'UUU': 'Phenylalanine',
  'UUC': 'Phenylalanine',
  'UUA': 'Leucine',
  'UUG': 'Leucine',
  'UCU': 'Serine',
  'UCC': 'Serine',
  'UCA': 'Serine',
  'UCG': 'Serine',
  'UAU': 'Tyrosine',
  'UAC': 'Tyrosine',
  'UGU': 'Cysteine',
  'UGC': 'Cysteine',
  'UGG': 'Tryptophan',
  'UAA': 'STOP',
  'UAG': 'STOP',
  'UGA': 'STOP',
}

export function translate(strand: string) : string[] {
  const result: Array<string> = []
  while(strand.length > 0) {
    const current = strand.slice(0, 3)
    const tempArray = strand.split('')
    tempArray.splice(0, 3)
    strand = tempArray.join('')
    // if (dict.hasOwnProperty(current)) {
    if (Object.prototype.hasOwnProperty.call(dict, current)) {
      const aminoAcid = dict[current]
      if (aminoAcid === 'STOP') {
        break
      }
      result.push(aminoAcid)
    } else {
      throw new Error('Invalid codon')
    }
  }
  return result
}

// 9:04
