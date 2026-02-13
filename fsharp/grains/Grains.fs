module Grains
open System.Numerics

let square (n: int): Result<uint64,string> =
    match n with
    | n when n < 1 || n > 64 -> Error "square must be between 1 and 64"
    | _ -> Ok (uint64 (BigInteger.Pow(2, n-1)))

let total: Result<uint64,string> =
    let squares = [ for i in 1..64 -> square i]
    let sum = squares |> Seq.sumBy (fun x-> Result.defaultValue 0UL x)
    Ok (uint64 sum)
