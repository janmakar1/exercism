return {
  format = function(name, number)

    local pronoun = ""
    local two_digits = number % 100
    if two_digits == 11 or two_digits == 12 or two_digits == 13 then
      pronoun = number .. "th"
    else
      local last_digit = number % 10
      
      if last_digit == 1 then
        pronoun = number .. "st"
      elseif last_digit == 2 then
        pronoun = number .. "nd"
      elseif last_digit == 3 then
        pronoun = number .. "rd"
      else
        pronoun = number .. "th"
      end
    end
    
    return name .. ", you are the " .. pronoun .. " customer we serve today. Thank you!"

  end
}
