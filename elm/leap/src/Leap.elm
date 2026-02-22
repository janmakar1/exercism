module Leap exposing (isLeapYear)


isLeapYear : Int -> Bool
isLeapYear year =
    let
        by4 =
            remainderBy 4 year == 0

        by100 =
            remainderBy 100 year == 0

        by400 =
            remainderBy 400 year == 0
    in
    if by400 then
        True

    else if by100 then
        False

    else if by4 then
        True

    else
        False
