package collatzconjecture

import "errors"

func CollatzConjecture(n int) (int, error) {
	if n <= 0 {
		return 0, errors.New("n must be at least 1")
	}
	return collatz(n, 0), nil
}

func collatz(n, steps int) int {
	switch {
	case n == 1:
		return steps
	case n%2 == 0:
		return collatz(n/2, steps+1)
	default:
		return collatz(3*n+1, steps+1)
	}
}
