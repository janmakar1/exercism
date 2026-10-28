const isEven = (n: number): boolean => n % 2 === 0

export function steps(count: number): number {
  if (count < 1 || !Number.isInteger(count)) {
    throw new Error('Only positive integers are allowed')
  }

  let result= 0
  while (count !== 1) {
    if (isEven(count)) {
      count /= 2
    } else {
      count = count * 3 + 1
    }
    result++
  }
  return result
}
