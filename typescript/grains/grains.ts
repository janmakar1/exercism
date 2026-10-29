export const square = (n: number) => {
  if (n <= 0 || n > 64) {
    throw new Error("n must be in range <1, 64>")
  }
  return BigInt(Math.pow(2, n-1))
}

export const total = () => {
  let sum = BigInt(0)
  for (let i = 1; i < 65; i++) {
    sum += square(i)
  }
  return sum
}
