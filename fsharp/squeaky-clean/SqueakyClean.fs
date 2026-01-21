module SqueakyClean

open System

let transform (c: char) : string =
    match c with
        | '-' -> "_"
        | ' ' -> ""
        | c when Char.IsUpper c -> "-" + (Char.ToLower c).ToString()
        | c when Char.IsDigit c -> ""
        | c when Char.IsBetween (c, 'α', 'ω') -> "?"
        | _ -> string c
    
let clean (identifier: string): string =
    String.collect transform identifier
