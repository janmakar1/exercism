{
  square: (n) ->
    if n < 1 or n > 64
      error "n must be at 1-64 (inclusive)"
    else
      return 2 ^ (n - 1)

  total: ->
    s = 0
    for i = 2, 64
      s += 2 ^ (i - 1)
    return s
}
