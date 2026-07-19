is_pangram = (sentence) ->
  sentence_lowered = string.lower(sentence)
  -- print(sentence_lowered)
  occurences = {}

  -- print("start:----")
  for x = string.byte('a'), string.byte('z')
    occurences[string.char(x)] = 0
  -- print("----")

--[[
--  for letter, val in pairs(occurences)
--    print("->" .. letter .. ":" .. tostring(val))
--  print(">>")
--]]

  -- return false

  for letter in string.gmatch(sentence_lowered, '%l')
    -- print(letter)
    if occurences[letter] == nil
      occurences[letter] = 1
      -- continue
    else
      occurences[letter] += 1
 
  --print("Tutaj drukowanie")
  for letter, val in pairs(occurences)
    --print("Wewnatrz petli")
    if val < 1
      return false
    --print(letter .. ":" .. tostring(val))
  return true


return is_pangram
