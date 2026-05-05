class SpaceAge(
    val seconds: Int,
) {
    val planets =
        mapOf(
            "Earth" to 1.0,
            "Mercury" to 0.2408467,
            "Venus" to 0.61519726,
            "Earth" to 1.0,
            "Mars" to 1.8808158,
            "Jupiter" to 11.862615,
            "Saturn" to 29.447498,
            "Uranus" to 84.016846,
            "Neptune" to 164.79132,
        )

    fun onEarth(): Double = (seconds.toDouble() / 31_557_600)

    fun onMercury(): Double = onEarth() / planets.getOrDefault("Mercury", 0.0)

    fun onVenus(): Double = onEarth() / planets.getOrDefault("Venus", 0.0)

    fun onMars(): Double = onEarth() / planets.getOrDefault("Mars", 0.0)

    fun onJupiter(): Double = onEarth() / planets.getOrDefault("Jupiter", 0.0)

    fun onSaturn(): Double = onEarth() / planets.getOrDefault("Saturn", 0.0)

    fun onUranus(): Double = onEarth() / planets.getOrDefault("Uranus", 0.0)

    fun onNeptune(): Double = onEarth() / planets.getOrDefault("Neptune", 0.0)
}
