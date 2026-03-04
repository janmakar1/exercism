// @ts-check

/**
 * Calculates the sum of the two input arrays.
 *
 * @param {number[]} array1
 * @param {number[]} array2
 * @returns {number} sum of the two arrays
 */
export function twoSum(array1, array2) {
  let string1 = '';
  array1.forEach(val => string1 += val);  
  let string2 = '';
  array2.forEach(val => string2 += val);

  return Number(string1) + Number(string2);
}

/**
 * Checks whether a number is a palindrome.
 *
 * @param {number} value
 * @returns {boolean} whether the number is a palindrome or not
 */
export function luckyNumber(value) {
  let str = String(value);
  let reversed = str.split('').reverse().join('');
  return reversed == str;
}

/**
 * Determines the error message that should be shown to the user
 * for the given input value.
 *
 * @param {string|null|undefined} input
 * @returns {string} error message
 */
export function errorMessage(input) {
  if (input === undefined || input === null || input?.trim() === '') {
    return 'Required field';
  } else if (Number(input) > 0) {
    return '';
  } else {
    return 'Must be a number besides 0';
  }
}
