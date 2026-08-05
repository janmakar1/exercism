local BottleSong = {}

local numbers = {	
  "One",
  "Two",
  "Three",
  "Four",
  "Five",
  "Six",
  "Seven",
  "Eight",
  "Nine",
  "Ten",
}

local verse = [[
%s green %s hanging on the wall,
%s green %s hanging on the wall,
And if one green bottle should accidentally fall,
There'll be %s green %s hanging on the wall.
]]

local last_verse = [[
One green bottle hanging on the wall,
One green bottle hanging on the wall,
And if one green bottle should accidentally fall,
There'll be no green bottles hanging on the wall.
]]


function BottleSong.recite(start_bottles, take_down)
  local result = ""
  for i = start_bottles, start_bottles - take_down + 1, -1 do
    result = result .. BottleSong.recite_one(i)

    if i ~= start_bottles - take_down + 1 then
      result = result .. "\n"
    end
  end
  return result
end

function BottleSong.recite_one(i)

  local noun1 = "bottles"
  local noun2 = "bottles"
  if i == 2 then
    noun2 = "bottle"
  end

  local result

  if i == 1 then
    result = last_verse
  else
    result = string.format(
      verse,
      numbers[i], noun1,
      numbers[i], noun1,
      string.lower(numbers[i-1]), noun2
    )
  end

  return result
end

return BottleSong
