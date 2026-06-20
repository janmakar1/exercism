package isogram

import "strings"

func IsIsogram(word string) bool {

	lowercased := strings.ToLower(word)
	noSpaces := strings.ReplaceAll(lowercased, " ", "")
	noHyphens := strings.ReplaceAll(noSpaces, "-", "")

	m := make(map[string]int)

	for i := 0; i < len(noHyphens); i++ {
		letter := string(noHyphens[i]) // exp inside is rune, so we need to convert it to string
		_, letterExistsAlready := m[letter]
		if letterExistsAlready {
			return false
		} else {
			m[letter]++
		}
	}

	return true
}
