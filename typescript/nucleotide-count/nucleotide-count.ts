export function nucleotideCounts(strand: string) {
  let result: Record<string, number> = {
    A: 0,
    C: 0,
    G: 0,
    T: 0
  }

  if (strand.split('').every((x) => Object.keys(result).includes(x))) {
    // ok
  } else {
    throw new Error('Invalid nucleotide in strand')
  }

  for (let code of Object.keys(result)) {
    const occ = strand.split('').filter((x) => x === code).length
    result[code] = occ
  }
  return result;
}
