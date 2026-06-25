package eliudseggs

import "fmt"

func EggCount(displayValue int) int {
	s := fmt.Sprintf("%b", displayValue)
	count := 0
	for _, r := range s {
		if r == '1' {
			count++
		}
	}
	return count
}
