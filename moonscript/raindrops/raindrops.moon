raindrops = (num) ->
  if num % 3 ~= 0 and num % 5 ~= 0 and num % 7 ~= 0
    return tostring(num)
  else
    s = ""
    if num % 3 == 0
      s = s .. "Pling"
    if num % 5 == 0
      s = s .. "Plang"
    if num % 7 == 0
      s = s .. "Plong"
    return s

raindrops
