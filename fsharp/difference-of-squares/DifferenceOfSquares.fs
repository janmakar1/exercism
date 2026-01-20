module DifferenceOfSquares

let squareOfSum (number: int): int =
    let sum = [1..number] |> List.sum
    sum * sum

let sumOfSquares (number: int): int =
    let numbers = [1..number]
    numbers |> List.sumBy (fun i -> i * i)

let differenceOfSquares (number: int): int =
    abs (sumOfSquares number - squareOfSum number)
