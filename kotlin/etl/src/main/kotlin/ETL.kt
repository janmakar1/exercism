object ETL {
    fun transform(source: Map<Int, Collection<Char>>): Map<Char, Int> {
        val result = mutableMapOf<Char, Int>()
        for ((occurencies, letters) in source.entries) {
            for (letter in letters) {
                result.put(letter.lowercaseChar(), occurencies)
            }
        }
        return result
    }
}
