package lineup

import "fmt"

func Format(name string, number int) string {
	ones := number % 10
	tens := number % 100
	var ending string
	if tens == 11 || tens == 12 || tens == 13 {
		ending = "th"
	} else {
		switch ones {
		case 1:
			ending = "st"
		case 2:
			ending = "nd"
		case 3:
			ending = "rd"
		default:
			ending = "th"
		}
	}
	return fmt.Sprintf("%s, you are the %d%s customer we serve today. Thank you!",
		name,
		number,
		ending,
	)
}
