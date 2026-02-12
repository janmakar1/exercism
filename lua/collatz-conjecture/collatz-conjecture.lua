return function(n)
  local step = 0
  assert(n > 0, 'n cannot be negative')

  while (n ~= 1)
  do
    if n % 2 == 0 then
      n = n / 2
    else
      n = n * 3 + 1
    end
    step = step + 1
  end
  return step
end
