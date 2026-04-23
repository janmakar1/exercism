import gleam/result

pub type Player {
  Black
  White
}

pub type Game {
  Game(
    white_captured_stones: Int,
    black_captured_stones: Int,
    player: Player,
    error: String,
  )
}

pub fn apply_rules(
  game: Game,
  rule1: fn(Game) -> Result(Game, String),
  rule2: fn(Game) -> Game,
  rule3: fn(Game) -> Result(Game, String),
  rule4: fn(Game) -> Result(Game, String),
) -> Game {
  let mapped =
    Ok(game)
    |> result.map(rule1)
    |> result.flatten
    |> result.map(rule2)
    |> result.map(rule3)
    |> result.flatten
    |> result.map(rule4)
    |> result.flatten

  let next_player = case game.player {
    Black -> White
    White -> Black
  }

  case mapped {
    Ok(game_after) ->
      Game(
        white_captured_stones: game_after.white_captured_stones,
        black_captured_stones: game_after.black_captured_stones,
        player: next_player,
        error: "",
      )
    Error(error_msg) ->
      Game(
        white_captured_stones: game.white_captured_stones,
        black_captured_stones: game.black_captured_stones,
        player: game.player,
        error: error_msg,
      )
  }
}
