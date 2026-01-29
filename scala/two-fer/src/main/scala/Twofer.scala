object Twofer {
  def twofer(name: String = "you"): String =
    if (name != null)
      s"One for ${name}, one for me."
    else
      "One for you, one for me."
}
