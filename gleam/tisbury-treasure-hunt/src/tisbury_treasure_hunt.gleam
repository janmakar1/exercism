import gleam/list

pub fn place_location_to_treasure_location(
  place_location: #(String, Int),
) -> #(Int, String) {
  let #(place, location) = place_location
  #(location, place)
}

pub fn treasure_location_matches_place_location(
  place_location: #(String, Int),
  treasure_location: #(Int, String),
) -> Bool {
  let location_place = place_location_to_treasure_location(place_location)
  location_place == treasure_location
}

pub fn count_place_treasures(
  place: #(String, #(String, Int)),
  treasures: List(#(String, #(Int, String))),
) -> Int {
  let treasures_locations_coordinates: List(#(Int, String)) =
    list.map(treasures, fn(x) { x.1 })

  let place_location = place.1

  list.count(treasures_locations_coordinates, fn(treasure_coord) {
    treasure_coord.0 == place_location.1 && treasure_coord.1 == place_location.0
  })
}

pub fn special_case_swap_possible(
  found_treasure: #(String, #(Int, String)),
  place: #(String, #(String, Int)),
  desired_treasure: #(String, #(Int, String)),
) -> Bool {
  case found_treasure.0, place.0, desired_treasure.0 {
    "Brass Spyglass", "Abandoned Lighthouse", _ -> True
    "Amethyst Octopus", "Stormy Breakwater", "Crystal Crab" -> True
    "Amethyst Octopus", "Stormy Breakwater", "Glass Starfish" -> True
    "Vintage Pirate Hat", "Harbor Managers Office", "Model Ship in Large Bottle"
    -> True
    "Vintage Pirate Hat",
      "Harbor Managers Office",
      "Antique Glass Fishnet Float"
    -> True
    _, _, _ -> False
  }
}
