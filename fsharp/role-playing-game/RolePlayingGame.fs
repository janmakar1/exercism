module RolePlayingGame

type Player = { 
    Name: string option
    Level: int
    Health: int
    Mana: int option
}

let introduce (player: Player): string = 
    match player with
    | { Name = Some name } -> name
    | { Name = None } -> "Mighty Magician"

let revive (player: Player): Player option = 
    match player with
    | { Health = 0 } when player.Level >= 10 -> Some { player with Mana =  Some 100; Health = 100}
    | { Health = 0 } -> Some { player with Health = 100 }
    | _ -> None

let castSpell (manaCost: int) (player: Player): Player * int =
    let manaVal = Option.defaultValue 0 player.Mana
    let doNotDie (health: int): int = if health < 0 then 0 else health
    match player with
    | { Mana = None } -> { player with Health = doNotDie (player.Health - manaCost) }, 0
    | _ when player.Mana >= Some manaCost -> { player with Mana = Some (manaVal - manaCost)}, 2 * manaCost
    | _ -> player, 0
