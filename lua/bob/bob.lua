local bob = {}

function bob.hey(say)
  local is_question = say:match('?%s*$')
  local is_yelling = say == say:upper() and say:match('%a')
  local is_whitespace = say:match('^%s+$') or say == ""

  if is_question and is_yelling then
    return "Calm down, I know what I'm doing!"
  elseif is_question then
    return "Sure."
  elseif is_yelling then
    return "Whoa, chill out!"
  elseif is_whitespace then
    return "Fine. Be that way!"
  else
    return "Whatever."
  end
end

return bob
