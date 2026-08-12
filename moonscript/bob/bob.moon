response = (input) ->
  is_question = string.match(input, '?%s*$')
  is_yelling = string.match(input, '%u') and input == string.upper(input)
  is_silence = string.match(input, '^%s+$') or input == ""

  if is_question and is_yelling
    return "Calm down, I know what I'm doing!"
  elseif is_question
    return "Sure."
  elseif is_yelling
    return "Whoa, chill out!"
  elseif is_silence
    return "Fine. Be that way!"
  else
    return "Whatever."

{ hey: response }
