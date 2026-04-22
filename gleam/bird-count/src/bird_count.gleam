pub fn today(days: List(Int)) -> Int {
  case days {
    [day, ..] -> day
    [] -> 0
  }
}

pub fn increment_day_count(days: List(Int)) -> List(Int) {
  case days {
    [day, ..rest] -> [day + 1, ..rest]
    [] -> [1]
  }
}

pub fn has_day_without_birds(days: List(Int)) -> Bool {
  case days {
    [day, ..rest] if day > 0 -> has_day_without_birds(rest)
    [0, ..] -> True
    _ -> False
  }
}

pub fn total(days: List(Int)) -> Int {
  case days {
    [day, ..rest] -> day + total(rest)
    [] -> 0
  }
}

pub fn busy_days(days: List(Int)) -> Int {
  case days {
    [day, ..rest] if day >= 5 -> 1 + busy_days(rest)
    [_day, ..rest] -> busy_days(rest)
    _ -> 0
  }
}
