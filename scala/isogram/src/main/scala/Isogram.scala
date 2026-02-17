object Isogram {
  def isIsogram(input: String): Boolean =
    val letters = input.toLowerCase.filter(_.isLetter);
    letters.distinct.size == letters.size;
}