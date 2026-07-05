module LineUp

let format (name: string) (number: int): string =
    let ending : string = match number with
                            | i when i % 100 = 11 -> "th"
                            | i when i % 100 = 12 -> "th"
                            | i when i % 100 = 13 -> "th"
                            | i when i % 10 = 1 -> "st"
                            | i when i % 10 = 2 -> "nd"
                            | i when i % 10 = 3 -> "rd"
                            | _ -> "th"
    name + ", you are the " + string(number) + ending + " customer we serve today. Thank you!"
