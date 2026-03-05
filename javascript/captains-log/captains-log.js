// @ts-check

/**
 * Generates a pseudorandom integer between min and max values.
 *
 * @param {number} min minimal value
 * @param {number} max maximal value
 * 
 * @returns {number} the generated pseudo-random value.
 */
function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min) + min);
}

/**
 * Generates a random starship registry number.
 *
 * @returns {string} the generated registry number.
 */
export function randomShipRegistryNumber() {

  return `NCC-${getRandomInt(1000, 9999)}`;
}

/**
 * Generates a random stardate.
 *
 * @returns {number} a stardate between 41000 (inclusive) and 42000 (exclusive).
 */
export function randomStardate() {
  return getRandomInt(41000, 41999) + Math.random() ;
}

/**
 * Generates a random planet class.
 *
 * @returns {string} a one-letter planet class.
 */
export function randomPlanetClass() {
  const planetClasses = ['D', 'H', 'J', 'K', 'L', 'M', 'N', 'R', 'T', 'Y'];
  const randomPlanetIdx = getRandomInt(0, planetClasses.length);
  return planetClasses[randomPlanetIdx];
}
