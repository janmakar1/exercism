package grains

import "errors"

func Square(number int) (uint64, error) {
	if number < 1 || number > 64 {
		return 0, errors.New("number must be in range <1, 64>!")
	}

	return intPow(2, number-1), nil
}

func Total() uint64 {
	var s uint64 = 0
	for i := 1; i <= 64; i++ {
		square, _ := Square(i)
		s += square
	}
	return s
}

func intPow(n, m int) uint64 {
	if m == 0 {
		return uint64(1)
	}

	if m == 1 {
		return uint64(n)
	}

	var result uint64 = uint64(n)
	for i := 2; i <= m; i++ {
		result *= uint64(n)
	}
	return result
}
