module RolePlayingGame exposing (Player, castSpell, introduce, revive)


type alias Player =
    { name : Maybe String
    , level : Int
    , health : Int
    , mana : Maybe Int
    }


introduce : Player -> String
introduce { name } =
    Maybe.withDefault "Mighty Magician" name


revive : Player -> Maybe Player
revive player =
    if .health player == 0 then
        if .level player >= 10 then
            Just { player | health = 100, mana = Just 100 }

        else
            Just { player | health = 100, mana = Nothing }

    else
        Nothing


castSpell : Int -> Player -> ( Player, Int )
castSpell manaCost player =
    case player.mana of
        Nothing ->
            if manaCost > player.health then
                ( { player | health = 0 }, 0 )

            else
                ( { player | health = player.health - manaCost }, 0 )

        Just playersMana ->
            if playersMana > manaCost then
                ( { player | mana = Just (playersMana - manaCost) }, manaCost * 2 )

            else
                ( player, 0 )
