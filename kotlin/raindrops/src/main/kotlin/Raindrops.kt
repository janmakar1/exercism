object Raindrops {
    fun convert(n: Int): String {
        if (n % 3 != 0 && n % 5 != 0 && n % 7 != 0) {
            return n.toString()
        } else {
            var str = ""
            if (n % 3 == 0) {
                str += "Pling"
            }
            if (n % 5 == 0) {
                str += "Plang"
            }
            if (n % 7 == 0) {
                str += "Plong"
            }
            return str
        }
    }
}
