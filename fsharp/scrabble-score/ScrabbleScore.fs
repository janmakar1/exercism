module ScrabbleScore

let scoreLetter (letter: char): int =
    let t = "02210313074020029000033739"
    let digit = int letter - 65
    int t[digit] - 48 + 1

let score (word : string) =
    let charsList = List.ofArray (word.ToUpper().ToCharArray())
    let scores = List.map scoreLetter charsList
    List.sum scores