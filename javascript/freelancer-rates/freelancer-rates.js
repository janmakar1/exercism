// @ts-check

/**
 * The day rate, given a rate per hour
 *
 * @param {number} ratePerHour
 * @returns {number} the rate per day
 */
export function dayRate(ratePerHour) {
  return 8 * ratePerHour;
}

/**
 * Calculates the number of days in a budget, rounded down
 *
 * @param {number} budget: the total budget
 * @param {number} ratePerHour: the rate per hour
 * @returns {number} the number of days
 */
export function daysInBudget(budget, ratePerHour) {
  return Math.floor(budget / dayRate(ratePerHour));
}

/**
 * Calculates the discounted rate for large projects, rounded up
 *
 * @param {number} ratePerHour
 * @param {number} numDays: number of days the project spans
 * @param {number} discount: for example 20% written as 0.2
 * @returns {number} the rounded up discounted rate
 */
export function priceWithMonthlyDiscount(ratePerHour, numDays, discount) {
  const DAYS_PER_MONTH = 22;
  let fullMonths = Math.floor(numDays / DAYS_PER_MONTH);
  let restOfDays = numDays % DAYS_PER_MONTH;
  
  return Math.ceil(
    applyDiscount(22 * dayRate(ratePerHour) * fullMonths, discount) +
    restOfDays * dayRate(ratePerHour)
    );

}

/**
 * 
 * @param {number} value 
 * @param {number} percentage 
 * @returns {number} the discounted value
 */
function applyDiscount(value, percentage) {
  return Math.ceil(value * (1 - percentage));
}
