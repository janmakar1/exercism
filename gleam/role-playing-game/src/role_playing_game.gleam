import gleam/int
import gleam/option.{type Option, None, Some}

pub type Player {
  Player(name: Option(String), level: Int, health: Int, mana: Option(Int))
}

pub fn introduce(player: Player) -> String {
  case player.name {
    Some(n) -> n
    None -> "Mighty Magician"
  }
}

pub fn revive(player: Player) -> Option(Player) {
  case player.health {
    0 -> {
      case player.level {
        lvl if lvl >= 10 ->
          Some(Player(
            name: player.name,
            level: lvl,
            health: 100,
            mana: Some(100),
          ))
        _ ->
          Some(Player(
            name: player.name,
            level: player.level,
            health: 100,
            mana: player.mana,
          ))
      }
    }
    _ -> None
  }
}

pub fn cast_spell(player: Player, cost: Int) -> #(Player, Int) {
  case player.mana {
    Some(mana) if mana > cost -> #(
      Player(
        name: player.name,
        level: player.level,
        health: player.health,
        mana: Some(mana - cost),
      ),
      2 * cost,
    )
    Some(_) -> #(player, 0)
    None -> #(
      Player(
        name: player.name,
        level: player.level,
        health: int.max(0, player.health - cost),
        mana: None,
      ),
      0,
    )
  }
}
