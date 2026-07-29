count_eggs = (num) ->
  ones = 0
  while num > 0
    ones += num % 2
    num = math.modf(num / 2)
  return ones

count_eggs
