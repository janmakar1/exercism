object Raindrops {
  def convert(n: Int): String =
    (n % 3 == 0, n % 5 == 0, n % 7 == 0) match
      case (true, true, true) => "PlingPlangPlong"
      case (true, false, false) => "Pling"
      case (false, true, false) => "Plang"
      case (false, false, true) => "Plong"
      case (true, true, false) => "PlingPlang"
      case (true, false, true) => "PlingPlong"
      case (false, true, true) => "PlangPlong"
      case (false, false, false) => n.toString()
}
