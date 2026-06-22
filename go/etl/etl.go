package etl

import "strings"

func Transform(in map[int][]string) map[string]int {
	out := make(map[string]int)

	for points, lettersSlice := range in {

		for _, letter := range lettersSlice {
			smallLetter := strings.ToLower(letter)
			out[smallLetter] = points
		}
	}

	return out
}
