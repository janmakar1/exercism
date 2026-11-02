function isPrime(n: number): boolean {
  if (n === 0 || n === 1) {
    return false
  }
  const isqrt = Math.floor(Math.sqrt(n))
  for (let potentialDivisor = 2; potentialDivisor <= isqrt; potentialDivisor++) {
    if (n % potentialDivisor === 0) {
      return false
    }
  }
  return true
}

export function nth(n: number): number {
  if (n <= 0) {
    throw new Error('Prime is not possible')
  } else {
    const primes: Array<number> = []
    let primesFound = 0
    let i = 0
    while (primesFound <= n) {
      if (isPrime(i)) {
        primes.push(i)
        primesFound++
      }
      i++
    }
    return primes[n - 1]
  }
}
