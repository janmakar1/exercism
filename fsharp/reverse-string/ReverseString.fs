module ReverseString

let reverse (input: string): string =
    let l = String.length input
    String.mapi (fun i _ -> input[l-i-1]) input
