module MariosMarvellousLasagna exposing (remainingTimeInMinutes)


remainingTimeInMinutes layers minutesAlready =
    let
        expectedMinutesInOven =
            40

        preparationTimeInMinutes minutes =
            2 * minutes
    in
    preparationTimeInMinutes layers + expectedMinutesInOven - minutesAlready
