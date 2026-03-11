/**
 * 
 * @param {String} planet 
 * @param {Number} seconds 
 */
export const age = (planet, seconds) => {
  // TODO: można przerobić tak, by jeszcze sprawdzało 
  // czy np liczba nie została podana, i wtedy pozmieniać testy
  // i zgłosić propozycję zmiany do Exercism teamu
  
  // const planetName = planet?.toLowerCase();
  // if (planetName === undefined) {
  //   throw new Error("not a planet");
  // }
  const planetName = planet.toLowerCase();
  if (Object.hasOwn(PLANETS, planetName)) {
    return precise(seconds / (SECONDS_PER_YEAR * PLANETS[planetName]));
  } else {
    throw new Error("not a planet");
  }
};

/**
 * @param {Number} x
 */
function precise(x) {
  return Number(x.toFixed(2));
}

const SECONDS_PER_YEAR = 31_557_600;

const PLANETS = {
  'mercury': 0.2408467,
  'venus': 0.61519726,
  'earth': 1.0,
  'mars': 1.8808158,
  'jupiter': 11.862615,
  'saturn': 29.447498,
  'uranus': 84.016846,
  'neptune': 164.79132,
}