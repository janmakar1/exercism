package primefactors

func Factors(n int64) []int64 {
	var primeFactors []int64
	var potentialFactor int64 = 2
	for n > 1 {
		if n%potentialFactor == 0 {
			primeFactors = append(primeFactors, potentialFactor)
			n /= potentialFactor
		} else {
			potentialFactor++
		}
	}
	return primeFactors
}
