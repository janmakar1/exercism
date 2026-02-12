local grains = {}

function grains.square(n)
  assert(n > 0 or n <= 64, "n must be between 1 and 64")
  return 2 ^ (n - 1)
end

function grains.total()
  local s = 0
  for i = 1,64 do
    s = s + grains.square(i)
  end
  return s
end

return grains
