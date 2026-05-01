object CollatzCalculator {
    fun computeStepCount(start: Int): Int {
        if (start <= 0) {
            throw IllegalArgumentException()
        }
        var steps = 0
        var n = start
        while (n != 1) {
            if (n % 2 == 0) {
                n = n / 2
            } else {
                n = 3 * n + 1
            }
            steps += 1
        }
        return steps
    }
}
