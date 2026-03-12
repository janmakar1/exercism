/**
 * 
 * @param {Number} n
 * @returns {Boolean} 
 */
export const isLeap = (n) => {
  if (n % 400 === 0) {
    return true;
  } else if (n % 100 === 0) {
    return false;
  } else {
    return (n % 4 === 0);
  }
};
