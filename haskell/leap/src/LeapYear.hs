module LeapYear (isLeapYear) where

isLeapYear :: Integer -> Bool
isLeapYear year =
--  by4 = mod year 4
--  by100 = mod year 100
--  by400 = mod year 400
  if mod year 400 == 0 then
    True
  else
    if mod year 100 == 0 then
      False
    else
      mod year 4 == 0

