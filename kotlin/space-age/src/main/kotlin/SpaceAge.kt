class SpaceAge(
    val seconds: Int,
) {
    private enum class Planet(
        val orbitalPeriod: Double,
    ) {
        EARTH(1.0),
        MERCURY(0.2408467),
        VENUS(0.61519726),
        MARS(1.8808158),
        JUPITER(11.862615),
        SATURN(29.447498),
        URANUS(84.016846),
        NEPTUNE(164.79132),
    }

    private val earthYearSeconds = 31_557_600

    private val earthYears = seconds.toDouble() / earthYearSeconds

    fun onEarth(): Double = earthYears

    fun onMercury(): Double = earthYears / Planet.MERCURY.orbitalPeriod

    fun onVenus(): Double = earthYears / Planet.VENUS.orbitalPeriod

    fun onMars(): Double = earthYears / Planet.MARS.orbitalPeriod

    fun onJupiter(): Double = earthYears / Planet.JUPITER.orbitalPeriod

    fun onSaturn(): Double = earthYears / Planet.SATURN.orbitalPeriod

    fun onUranus(): Double = earthYears / Planet.URANUS.orbitalPeriod

    fun onNeptune(): Double = earthYears / Planet.NEPTUNE.orbitalPeriod
}
