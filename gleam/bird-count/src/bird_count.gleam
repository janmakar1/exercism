pub fn today(days: List(Int)) -> Int {
  case days {
    [birds, ..] -> birds
    [] -> 0
  }
}

pub fn increment_day_count(days: List(Int)) -> List(Int) {
  case days {
    [birds, ..tail] -> [birds + 1, ..tail]
    [] -> [1]
  }
}

pub fn has_day_without_birds(days: List(Int)) -> Bool {
  case days {
    [day, ..tail] if day > 0 -> has_day_without_birds(tail)
    [day, ..] if day == 0 -> True
    _ -> False
  }
}

pub fn total(days: List(Int)) -> Int {
  case days {
    [birds, ..tail] -> birds + total(tail)
    [] -> 0
  }
}

pub fn busy_days(days: List(Int)) -> Int {
  case days {
    [day, ..tail] if day >= 5 -> 1 + busy_days(tail)
    [day, ..tail] if day < 5 -> busy_days(tail)
    [day] if day >= 5 -> 1
    _ -> 0
  }
}
