module Bandwagoner exposing (..)


type alias Coach =
    { name : String
    , formerPlayer : Bool
    }


type alias Stats =
    { wins : Int
    , losses : Int
    }


type alias Team =
    { name : String
    , coach : Coach
    , stats : Stats
    }


createTeam : String -> Stats -> Coach -> Team
createTeam name stats coach =
    let
        team =
            Team name coach stats
    in
    team


replaceCoach newCoach team =
    let
        updatedTeam =
            { team | coach = newCoach }
    in
    updatedTeam


rootForTeam : { a | stats : Stats } -> Bool
rootForTeam team =
    let
        { stats } =
            team
    in
    stats.wins > stats.losses
