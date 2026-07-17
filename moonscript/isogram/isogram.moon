{
  is_isogram: (phrase) ->
    occurences = {}
    phrase_lowercased = string.lower(phrase)
    redacted = string.gsub(phrase_lowercased, '[%p%s]', '')
    for letter in string.gmatch(redacted, '.')
      if occurences[letter] == nil
        occurences[letter] = 1
        continue
      if occurences[letter] >= 1
        return false
      else
        occurences[letter] += 1

    return true
}
