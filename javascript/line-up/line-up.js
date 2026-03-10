/**
 * 
 * @param {String} name
 * @param {Number} number 
 * @returns {String} greeting
 */
export const format = (name, number) => {
  const last_two_digits = number % 100;
  if (last_two_digits === 11 ||
      last_two_digits === 12 ||
      last_two_digits === 13) {
      return `${name}, you are the ${number}th customer we serve today. Thank you!`;
  }

  const last_digit = number % 10;
  if (last_digit === 1) {
      return `${name}, you are the ${number}st customer we serve today. Thank you!`;
  }
  if (last_digit === 2) {
      return `${name}, you are the ${number}nd customer we serve today. Thank you!`;
  }
  if (last_digit === 3) {
      return `${name}, you are the ${number}rd customer we serve today. Thank you!`;
  } else {
      return `${name}, you are the ${number}th customer we serve today. Thank you!`;
  }

};
