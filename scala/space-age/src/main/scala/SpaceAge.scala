object SpaceAge {
  val agesOnPlanets: Map[String, Double] = Map(
    "Mercury" -> 0.2408467,
    "Venus" -> 0.61519726,
    "Earth" -> 1.0,
    "Mars" -> 1.8808158,
    "Jupiter" -> 11.862615,
    "Saturn" -> 29.447498,
    "Uranus" -> 84.016846,
    "Neptune" -> 164.79132,
  )
  val earthYear = 31_557_600

  def onEarth(age: Double): Double =
    age / earthYear

  def onVenus(age: Double): Double =
    onEarth(age) / agesOnPlanets("Venus")

  def onMercury(age: Double): Double =
    onEarth(age) / agesOnPlanets("Mercury")

  def onMars(age: Double): Double =
    onEarth(age) / agesOnPlanets("Mars")

  def onJupiter(age: Double): Double =
    onEarth(age) / agesOnPlanets("Jupiter")

  def onSaturn(age: Double): Double =
    onEarth(age) / agesOnPlanets("Saturn")

  def onUranus(age: Double): Double =
    onEarth(age) / agesOnPlanets("Uranus")

  def onNeptune(age: Double): Double =
    onEarth(age) / agesOnPlanets("Neptune")
}
