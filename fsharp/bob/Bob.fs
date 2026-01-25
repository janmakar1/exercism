module Bob

open System

let response (input: string): string =
    let inputTrimmed = input.Trim()
    let isQuestion = inputTrimmed.EndsWith '?'
    let hasLetters = inputTrimmed |> String.exists Char.IsLetter
    let isShouting = inputTrimmed |> String.filter Char.IsLetter |> String.forall Char.IsUpper
    let isSilence = inputTrimmed |> String.IsNullOrWhiteSpace

    if isSilence then
        "Fine. Be that way!"
    else if isQuestion && hasLetters && isShouting then
        "Calm down, I know what I'm doing!"
    else if isQuestion then
        "Sure."
    else if isShouting && hasLetters then
        "Whoa, chill out!"
    else
        "Whatever."
