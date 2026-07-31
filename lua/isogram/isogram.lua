return function(s)
  local o = {}
  for l in s:gmatch('.') do
    if l ~= '-' and l ~= ' ' then
      sl = l:lower()
      if o[sl] == nil then
        o[sl] = 1
      elseif o[sl] ~= nil then
        return false
      end
    end
  end
  return true
end
