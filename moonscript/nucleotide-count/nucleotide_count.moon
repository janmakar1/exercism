counter = (strand) ->
  counts = {
    'A': 0,
    'G': 0,
    'C': 0,
    'T': 0,
  }
  for l in string.gmatch(strand, '.')
    if l == 'A' or l == 'G' or l == 'C' or l == 'T'
      if counts[l] == nil
        counts[l] = 1
      else
        counts[l] += 1
    else
      error 'Invalid nucleotide in strand'
  return counts


return counter
