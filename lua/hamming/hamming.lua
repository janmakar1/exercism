local Hamming = {}

function Hamming.compute(a, b)
  if #a ~= #b then
    -- return false
    error("strands must be of equal length")
  end
  
  local distance = 0
  for i = 1, #a do
    local al = a:sub(i, i)
    local bl = b:sub(i, i)
    if al ~= bl then
      distance = distance + 1
    end
  end
  return distance
end

return Hamming
