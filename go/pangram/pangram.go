package pangram

import "strings"

const alphabet = "abcdefghijklmnoprstuwqxyz"

func IsPangram(input string) bool {
	lowercased := strings.ToLower(input)
	noWhitespaces := strings.ReplaceAll(lowercased, " ", "")

	m := make(map[string]int)

	for _, r := range noWhitespaces {
		letter := string(r)
		m[letter]++
	}

	for _, r := range alphabet {
		_, letterExists := m[string(r)]
		if !letterExists {
			return false
		}
	}
	return true
}
