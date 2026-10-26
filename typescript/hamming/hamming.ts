export function compute(left: string, right: string): number {
  if (left.length != right.length) {
    throw new Error('DNA strands must be of equal length.')
  }
  let result = 0;
  left.split("").forEach((leftValue, index) => {
    const rightValue = right.at(index)
    if (leftValue != rightValue) {
      result += 1
    }
  })
  return result
}
