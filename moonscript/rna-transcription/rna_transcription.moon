to_rna = (dna) ->
  result = ''
  for letter in string.gmatch(dna, '.')
    if letter == 'G'
      result ..= 'C'
    elseif letter == 'C'
      result ..= 'G'
    elseif letter == 'T'
      result ..= 'A'
    elseif letter == 'A'
      result ..= 'U'
    else
      error ("error")
  return result

return to_rna
