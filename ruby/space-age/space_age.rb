class SpaceAge
  SpaceAge::PLANETS = {
    'Mercury': 0.2408467,
    'Venus': 0.61519726,
    'Earth': 1.0,
    'Mars': 1.8808158,
    'Jupiter': 11.862615,
    'Saturn': 29.447498,
    'Uranus': 84.016846,
    'Neptune': 164.79132
  }.freeze

  def initialize(earth_seconds)
    @earth_seconds = earth_seconds
  end

  def on_earth
    @earth_seconds / 31_557_600.0
  end

  def on_mercury
    on_earth / SpaceAge::PLANETS[:Mercury]
  end

  def on_venus
    on_earth / SpaceAge::PLANETS[:Venus]
  end

  def on_mars
    on_earth / SpaceAge::PLANETS[:Mars]
  end

  def on_jupiter
    on_earth / SpaceAge::PLANETS[:Jupiter]
  end

  def on_saturn
    on_earth / SpaceAge::PLANETS[:Saturn]
  end

  def on_uranus
    on_earth / SpaceAge::PLANETS[:Uranus]
  end

  def on_neptune
    on_earth / SpaceAge::PLANETS[:Neptune]
  end
end
