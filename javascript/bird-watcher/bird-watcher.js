// @ts-check
//
// The line above enables type checking for this file. Various IDEs interpret
// the @ts-check directive. It will give you helpful autocompletion when
// implementing this exercise.

/**
 * Calculates the total bird count.
 *
 * @param {number[]} birdsPerDay
 * @returns {number} total bird count
 */
export function totalBirdCount(birdsPerDay) {
  let s = 0;
  for(let i = 0; i < birdsPerDay.length; i++) {
    s += birdsPerDay[i];
  }
  return s;
}

/**
 * Calculates the total number of birds seen in a specific week.
 *
 * @param {number[]} birdsPerDay
 * @param {number} week
 * @returns {number} birds counted in the given week
 */
export function birdsInWeek(birdsPerDay, week) {
  let s = 0;
  const seekedWeek = week - 1; // param week 1 => seeked week 0, param week 2 => seeked week 1 ...
  for(let i = 0, currentWeek = 0; i < birdsPerDay.length; i++) {
    currentWeek = Math.floor(i/7);
    if (currentWeek == seekedWeek) {
      s += birdsPerDay[i];
    }
  }
  return s;
}

/**
 * Fixes the counting mistake by increasing the bird count
 * by one for every second day.
 *
 * @param {number[]} birdsPerDay
 * @returns {void} should not return anything
 */
export function fixBirdCountLog(birdsPerDay) {
  let s = 0;
  for (let i = 0; i < birdsPerDay.length; i++) {
    if (i % 2 == 0) {
      birdsPerDay[i]++;
    }
  }
}
