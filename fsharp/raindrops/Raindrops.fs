module Raindrops

let convert (number: int): string =
    match number % 3 = 0, number % 5 = 0, number % 7 = 0 with
        | true, false, false -> "Pling"
        | false, true, false -> "Plang"
        | false, false, true -> "Plong"
        | true, true, false -> "PlingPlang"
        | true, true, true -> "PlingPlangPlong"
        | true, false, true -> "PlingPlong"
        | false, true, true -> "PlangPlong"
        | false, false, false -> string number
