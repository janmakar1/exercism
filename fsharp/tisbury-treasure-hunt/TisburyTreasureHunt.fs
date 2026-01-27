module TisburyTreasureHunt

let getCoordinate (line: string * string): string =
    snd line

let convertCoordinate (coordinate: string): int * char = 
    System.Int32.Parse (string coordinate[0]), coordinate[1]
    
let compareRecords (azarasData: string * string) (ruisData: string * (int * char) * string) : bool = 
    let azarasCoordinates = convertCoordinate (getCoordinate azarasData)
    let _, ruisCoordinates, _ = ruisData
    azarasCoordinates = ruisCoordinates

let createRecord (azarasData: string * string) (ruisData: string * (int * char) * string) : (string * string * string * string) =
    if compareRecords azarasData ruisData then
        let coordinate = getCoordinate azarasData
        let location, _, quadrant = ruisData
        let treasure = fst azarasData
        coordinate, location, quadrant, treasure
    else
        "", "", "", ""