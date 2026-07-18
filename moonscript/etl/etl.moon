{
  transform: (legacy) ->
    result = {}
    for points, letters_table in pairs (legacy)
      for _, letter in pairs(letters_table)
        small_letter = string.lower(letter)
        result[small_letter] = tonumber(points)
    return result
}
