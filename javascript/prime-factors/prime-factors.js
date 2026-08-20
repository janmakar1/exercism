export const primeFactors = (n) => {
  let factors = [];
  let potentialFactor = 2;
  while (n > 1) {
    if (n % potentialFactor == 0) {
      factors.push(potentialFactor);
      n /= potentialFactor;
    } else {
      potentialFactor++;
    }
  }
  return factors;
};
