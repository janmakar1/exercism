local function keep(xs, pred)
  local kept = {}
  for _, x in pairs(xs) do
    if pred(x) == true then
      table.insert(kept, x)
    end
  end
  return kept
end

local function discard(xs, pred)
  local discarded = {}
  for _, x in pairs(xs) do
    if pred(x) == false then
      table.insert(discarded, x)
    end
  end
  return discarded
end

return { keep = keep, discard = discard }
