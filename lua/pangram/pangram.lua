return function(s)
  local map = {}

  for code = string.byte('a'), string.byte('z') do
    map[string.char(code)] = 0
  end

  for l in s:gmatch('.') do
    local letter = string.lower(l)
    if map[letter] then
      map[letter] = map[letter] + 1
    end
  end

  for _, occurences in pairs(map) do
    if occurences == 0 then
      return false
    end
  end
  return true
end
