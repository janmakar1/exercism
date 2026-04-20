import gleam/list
import gleam/result

pub type Color {
  Black
  Brown
  Red
  Orange
  Yellow
  Green
  Blue
  Violet
  Grey
  White
}

pub fn code(color: Color) -> Int {
  let indices = list.index_map(colors(), fn(_, index) { index })
  let colors_to_index = list.zip(colors(), indices)
  list.key_find(colors_to_index, color) |> result.unwrap(-1)
}

pub fn colors() -> List(Color) {
  [Black, Brown, Red, Orange, Yellow, Green, Blue, Violet, Grey, White]
}
