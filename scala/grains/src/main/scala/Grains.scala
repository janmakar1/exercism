import scala.math
import java.math.BigInteger

object Grains {
  def square(n: Int): Option[BigInt] = {
    if n > 64 || n < 1 then
      None
    else
      Some(BigInt(2).pow(n-1))
  }

  def total = {
    val exponents = Seq.range(1, 65)
    exponents.foldLeft(BigInt(0))((m, n) => m + square(n).get)
  }
}