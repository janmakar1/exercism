import scala.collection.mutable.HashSet

object Isogram {
  def isIsogram(input: String): Boolean = {
    val set = HashSet[Char]()
    for { c <- input } {
      if c.isLetter then
        if set.contains(c.toLower) then
          return false
        else
          set.add(c.toLower)
    }
    return true
  }
}