package collatzconjecture

import "errors"

func CollatzConjecture(n int) (int, error) {
	//panic("Please implement the CollatzConjecture function")
	if n <= 0 {
		return 0, errors.New("n must be at least 1")
	}
	steps := 0
	result := collatz(n, steps) 
	return result, nil
}

func collatz(n, steps int) int {
	if n == 1 {
		return steps
	} else if n % 2 == 0 {
		return collatz(n / 2, steps + 1)
	} else {
		return collatz(3 * n + 1, steps + 1)
	}
}
