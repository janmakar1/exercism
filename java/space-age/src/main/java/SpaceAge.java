import java.util.HashMap;
import java.util.Map;

class SpaceAge {

    private HashMap<String, Double> planets = new HashMap(Map.of(
          "Earth", 1.0,
          "Mercury", 0.2408467,
          "Venus", 0.61519726,
          "Mars", 1.8808158,
          "Jupiter", 11.862615,
          "Saturn", 29.447498,
          "Uranus", 84.016846,
          "Neptune", 164.79132
          ));

    private double secondsOnEarth;

    SpaceAge(double seconds) {
        this.secondsOnEarth = seconds;
    }

    double getSeconds() {
        return 31_557_600.0;
    }

    double onEarth() {
        return this.secondsOnEarth / this.getSeconds() / this.planets.get("Earth");
    }

    double onMercury() {
        return this.secondsOnEarth / this.getSeconds() / this.planets.get("Mercury");
    }

    double onVenus() {
        return this.secondsOnEarth / this.getSeconds() / this.planets.get("Venus");
    }

    double onMars() {
        return this.secondsOnEarth / this.getSeconds() / this.planets.get("Mars");
    }

    double onJupiter() {
        return this.secondsOnEarth / this.getSeconds() / this.planets.get("Jupiter");
    }

    double onSaturn() {
        return this.secondsOnEarth / this.getSeconds() / this.planets.get("Saturn");
    }

    double onUranus() {
        return this.secondsOnEarth / this.getSeconds() / this.planets.get("Uranus");
    }

    double onNeptune() {
        return this.secondsOnEarth / this.getSeconds() / this.planets.get("Neptune");
    }

}
