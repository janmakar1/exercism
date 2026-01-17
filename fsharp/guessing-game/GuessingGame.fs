module GuessingGame

let reply (guess: int): string =
    match guess with
    | 42 -> "Correct"
    | i when abs (42 - i) = 1 -> "So close"
    | i when i < 41 -> "Too low"
    | _ -> "Too high"

