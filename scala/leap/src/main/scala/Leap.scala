object Leap {
  def leapYear(year: Int): Boolean =
    (year % 4 == 0, year % 100 == 0, year % 400 == 0) match {
      case (_, _, true) => true
      case (_, true, _) => false
      case (true, _, _) => true
      case (_) => false
    }
}
