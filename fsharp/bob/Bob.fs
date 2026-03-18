module Bob

open System

let response (input: string): string =
    let inputTrimmed = input.Trim()
    let isQuestion = inputTrimmed.EndsWith '?'
    let hasLetters = inputTrimmed |> String.exists Char.IsLetter
    let isShouting = inputTrimmed |> String.filter Char.IsLetter |> String.forall Char.IsUpper
    let isSilence = inputTrimmed |> String.IsNullOrWhiteSpace

    if isSilence then "Fine. Be that way!"
    elif isShouting && isQuestion && hasLetters then "Calm down, I know what I'm doing!"
    elif isShouting && hasLetters then "Whoa, chill out!"
    elif isQuestion then "Sure."
    else "Whatever."