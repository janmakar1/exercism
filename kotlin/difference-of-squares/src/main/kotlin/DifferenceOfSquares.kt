class Squares(val n: Int) {
    fun sumOfSquares(): Int = this.n * (this.n + 1) * (2 * this.n + 1) / 6

    fun squareOfSum(): Int {
        val sum = this.n * (this.n + 1) / 2
        return sum * sum
    }

    fun difference(): Int = squareOfSum() - sumOfSquares()
}
