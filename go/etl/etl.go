package etl

import "strings"
import "fmt"

func Transform(in map[int][]string) map[string]int {
	out := make(map[string]int)

	for points, lettersSlice := range in {
		for _, letter := range lettersSlice {
			out[strings.ToLower(letter)] = points
		}
	}

	return out
}
