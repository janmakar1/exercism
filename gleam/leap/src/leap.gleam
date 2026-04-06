pub fn is_leap_year(year: Int) -> Bool {
  let r400 = year % 400 == 0
  let r100 = year % 100 == 0
  let r4 = year % 4 == 0

  case r400, r100, r4 {
    True, _, _ -> True
    False, True, _ -> False
    False, False, True -> True
    _, _, _ -> False
  }
}
