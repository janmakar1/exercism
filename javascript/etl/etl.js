/**
 * 
 * @param {Object} score2letter 
 * @returns {Object} letter2score
 */
export const transform = (score2letter) => {
  let letter2score = {};
  for (const score in score2letter) {
    if (!Object.hasOwn(score2letter, score)) continue;
    
    const letters = score2letter[score];
    for (const letter of letters) {
      letter2score[letter.toLowerCase()] = Number(score);
    }
    
  }
  return letter2score;
};
