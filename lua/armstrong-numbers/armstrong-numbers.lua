local ArmstrongNumbers = {}

function ArmstrongNumbers.is_armstrong_number(number)
  if number == 0 then
	  return true
  end

  local str = tostring(number)
  local amount_of_digits = #str
  local s = 0
  for dstr in string.gmatch(str, '.') do
    local d = tonumber(dstr) ^ amount_of_digits
    s = s + d
  end
  return s == number
end

return ArmstrongNumbers
