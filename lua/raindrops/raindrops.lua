return function(n)
  local ret = ''
  if n % 3 == 0 or n % 5 == 0 or n % 7 == 0 then

    if n % 3 == 0 then
      ret = ret .. 'Pling'
    end

    if n % 5 == 0 then
      ret = ret .. 'Plang'
    end

    if n % 7 == 0 then
      ret = ret .. 'Plong'
    end

    return ret
  else
    return tostring(n)
  end
end

