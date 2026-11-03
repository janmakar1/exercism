export const eggCount = (displayValue: number): number => {
  let ones = 0
  while (displayValue > 0) {
    ones += displayValue & 1
    displayValue >>= 1
  }
  return ones
}
