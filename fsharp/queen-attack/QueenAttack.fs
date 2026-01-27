module QueenAttack

// 5 refs
let create (position: int * int) =
    let x, y = position
    x > 0 && x < 8 && y > 0 && y < 8

// 8 refs
let canAttack (queen1: int * int) (queen2: int * int) =
    let queen1_x, queen1_y = queen1
    let queen2_x, queen2_y = queen2
    queen1_x = queen2_x || queen1_y = queen2_y || abs (queen1_x - queen2_x) = abs (queen1_y - queen2_y)