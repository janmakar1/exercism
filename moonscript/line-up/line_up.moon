{
  format: (name, number) ->
    two_digits = number % 100
    last_digit = number % 10
    ending = ''
    if two_digits == 11 or two_digits == 12 or two_digits == 13
      ending = 'th'
    elseif last_digit == 1
      ending = 'st'
    elseif last_digit == 2
      ending = 'nd'
    elseif last_digit == 3
      ending = 'rd'
    else
      ending = 'th'

    "#{name}, you are the #{number}#{ending} customer we serve today. Thank you!"

}
