import java.math.BigInteger

object Board {
    fun getGrainCountForSquare(number: Int): BigInteger {
        if (number <= 64 && number > 0) {
            return BigInteger.TWO.pow(number - 1)
        } else {
            throw IllegalArgumentException("Number must be between 0 and 64")
        }
    }

    fun getTotalGrainCount(): BigInteger {
        // fun getTotalGrainCount(): Int {
        // return (1..64).fold(0, (acc, cur) -> acc + this.getGrainCountForSquare(cur))
        var s = BigInteger.ZERO
        for (i in 1..64) s += this.getGrainCountForSquare(i)
        return s
    }
}
// 38:21
