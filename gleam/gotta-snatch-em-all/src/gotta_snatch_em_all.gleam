import gleam/list
import gleam/set.{type Set}
import gleam/string

pub fn new_collection(card: String) -> Set(String) {
  set.from_list([card])
}

pub fn add_card(collection: Set(String), card: String) -> #(Bool, Set(String)) {
  #(
    set.contains(in: collection, this: card),
    set.insert(into: collection, this: card),
  )
}

pub fn trade_card(
  my_card: String,
  their_card: String,
  collection: Set(String),
) -> #(Bool, Set(String)) {
  let trade_possible = set.contains(collection, my_card)
  let trade_worth = !set.contains(collection, their_card)
  let trade_possibble_and_worth = trade_possible && trade_worth
  let new_collection = set.delete(collection, my_card) |> set.insert(their_card)
  #(trade_possibble_and_worth, new_collection)
}

pub fn boring_cards(collections: List(Set(String))) -> List(String) {
  let reduced =
    list.reduce(over: collections, with: fn(accumulator, collection) {
      set.intersection(accumulator, collection)
    })
  case reduced {
    Ok(s) -> set.to_list(s)
    Error(_) -> []
  }
}

pub fn total_cards(collections: List(Set(String))) -> Int {
  let reduced =
    list.reduce(over: collections, with: fn(accumulator, collection) {
      set.union(accumulator, collection)
    })
  case reduced {
    Ok(s) -> set.size(s)
    Error(_) -> 0
  }
}

pub fn shiny_cards(collection: Set(String)) -> Set(String) {
  set.filter(collection, keeping: fn(card) {
    string.starts_with(card, "Shiny ")
  })
}
