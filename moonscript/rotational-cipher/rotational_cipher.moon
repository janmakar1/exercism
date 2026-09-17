{
  rotate: (text, shift_key) ->
    ciphertext = ""
    local offset
    for letter in string.gmatch(text, '.')
      if string.find(letter, "%a")
        if letter == string.lower(letter)
          offset = string.byte("a")
        elseif letter == string.upper(letter)
          offset = string.byte("A")
        else
          error("letter is neither smol nor big :|")
        codepoint1 = string.byte(letter)
        codepoint2 = (codepoint1 - offset + shift_key ) % 26 + offset
        letter2 = string.char(codepoint2)
        ciphertext ..= letter2
      else
        ciphertext ..= letter

    return ciphertext
}
