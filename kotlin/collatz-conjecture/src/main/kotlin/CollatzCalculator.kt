object CollatzCalculator {
    fun computeStepCount(start: Int): Int {
        require(start > 0) {
            "start must be a positive argument"
        }

        val result = computeStepCountRec(start, 0)
        return result
    }

    tailrec fun computeStepCountRec(
        n: Int,
        steps: Int,
    ): Int =
        when {
            n == 1 -> steps
            (n % 2 == 0)	-> computeStepCountRec(n / 2, steps + 1)
            else -> computeStepCountRec(3 * n + 1, steps + 1)
        }
}
