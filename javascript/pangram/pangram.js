// @ts-check

/** Constant containing all ascii letters; equivalent to python's string.ascii_lowercase */
const LETTERS = 'abcdefghijklmnoprstuwxyz';
/**
 * Checks if sentence is a pangram
 * 
 * @param {string} sentence 
 * @returns {bool}
 */
export const isPangram = (sentence) => {
  return LETTERS.split('').every(letterInAlphabet => sentence.toLowerCase().includes(letterInAlphabet))
};

