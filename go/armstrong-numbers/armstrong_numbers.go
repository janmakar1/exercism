package armstrongnumbers

import "fmt"
import "math"

func IsNumber(n int) bool {
	s := fmt.Sprintf("%d", n)
	k := float64(len(s))
	var result float64

	for _, b := range s {
		d := float64(b - 48)
		result += math.Pow(d, k)
	}
	return int(result) == n
}
