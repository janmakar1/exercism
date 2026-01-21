module Leap

let leapYear (year: int): bool =
    match year % 400 = 0, year % 100 = 0, year % 4 = 0 with
    | (true, _, _) -> true
    | (_, true, true) -> false
    | (_ , _, true) -> true
    | _ -> false
