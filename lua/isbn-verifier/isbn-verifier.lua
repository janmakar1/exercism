return {
  valid = function(isbn)
    local s = isbn:gsub("-", "")
    if #s ~= 10 then
      return false
    end
    if s:match('[^%dX]') then
      -- print("Found non digit and non X character")
      return false
    end

    local x_found = s:find('X', 1)
    if x_found and x_found ~= 10 then
      -- print("Found X on pos ", x_found)
      return false
    end

    local mul = 10
    local sum = 0
    for dstring in s:gmatch('.') do
      local d
      if dstring == 'X' then
        d = 10
      else
        d = tonumber(dstring)
      end
      local a = d * mul
      mul = mul - 1
      sum = sum + a
    end

    return sum % 11 == 0

  end
}
