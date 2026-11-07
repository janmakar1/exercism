// @ts-check

/**
 * Checks if sentence is a pangram
 * 
 * @param {string} sentence 
 * @returns {bool}
 */
export const isPangram = (sentence) => {

  let allChars = new Set(sentence.toLowerCase());

  let nonLetters = new Set([' ', '_', '-', '"', "'", '.']);
  let digits = new Set(['1', '2', '3', '4', '5', '6', '7', '8', '9']);
  let letters = allChars.difference(nonLetters).difference(digits);

  return letters.size === 26;
}
