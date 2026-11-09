// @ts-check

/**
 * @params {string} input
 * @returns {string}
 */
const replaceOne = (input) => {
  const m = new Map([
    ['G','C'], ['T', 'A'], ['C', 'G'], ['A', 'U']
  ]);
  return m.has(input) ? m.get(input) : '';
};

/**
 * @params {string} input
 * @returns {string}
 */
export const toRna = (dna) => {
  return dna.split('').map(x => replaceOne(x)).join('');
};
