return {
  rotate = function(input, key)
    local ciphertext = ""
    local offset
    for letter in input:gmatch('.') do
      if letter:match("%a") then
        if letter == letter:lower() then
          offset = string.byte("a")
        elseif letter == letter:upper() then
          offset = string.byte("A")
	      else
	        error("letter neither smol nor big :|")
        end

        local codepoint1 = string.byte(letter)
        local codepoint2 = (codepoint1 - offset + key) % 26 + offset
        local letter2 = string.char(codepoint2)
        ciphertext = ciphertext .. letter2

      else
        ciphertext = ciphertext .. letter
      end
    end

    return ciphertext
  end
}
