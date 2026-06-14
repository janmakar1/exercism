package raindrops

import "fmt"
import "strings"

func Convert(number int) string {
	if number%3 != 0 && number%5 != 0 && number%7 != 0 {
		return fmt.Sprintf("%d", number)
	}

	var b strings.Builder
	if number%3 == 0 {
		b.WriteString("Pling")
	}

	if number%5 == 0 {
		b.WriteString("Plang")
	}

	if number%7 == 0 {
		b.WriteString("Plong")
	}

	return b.String()
}
