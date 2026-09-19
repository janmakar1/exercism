is_a_valid_triangle = (a, b, c) ->
  if a <= 0
    return false
  if b <= 0
    return false
  if c <= 0
    return false
  a + b >= c and b + c >= a and a + c >= b

is_equilateral = (a, b, c) ->
  if is_a_valid_triangle(a, b, c)
    a == b and b == c and c == a
  else
    false

is_isosceles = (a, b, c) ->
  if is_a_valid_triangle(a, b, c)
    a == b or b == c or c == a
  else
    false

is_scalene = (a, b, c) ->
  if is_a_valid_triangle(a, b, c)
    a != b and b ~= c and c ~= a
  else
    false



{ :is_equilateral, :is_isosceles, :is_scalene }
