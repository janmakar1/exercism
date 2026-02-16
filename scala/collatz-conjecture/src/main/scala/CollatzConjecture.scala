object CollatzConjecture:
  def steps(n: Int): Option[Int] =
    if n < 1 then
      None
    else
      var result = 0
      var ntemp = n
      while
        ntemp != 1
      do
        if ntemp % 2 == 0 then
          ntemp = ntemp / 2
          result = result + 1
        else
          ntemp = ntemp * 3 + 1
          result = result + 1

      return Some(result)
