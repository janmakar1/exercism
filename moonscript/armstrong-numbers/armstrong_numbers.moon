is_armstrong = (num) ->
  str = tostring(num)
  amount_of_digits = #str
  s = 0
  for dstr in string.gmatch(str, '.')
    d = tonumber(dstr) ^ amount_of_digits
    s += d
  s == num

{ :is_armstrong }

