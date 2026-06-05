package isbnverifier

import "strings"
import "strconv"
import "unicode"

func IsValidISBN(isbn string) bool {
	containsInvalidDigit := func(r rune) bool {
		return !(unicode.IsDigit(r) || r == 'X' || r == '-')
	}
	if strings.ContainsFunc(isbn, containsInvalidDigit) {
		return false
	}
	withoutDashes := strings.ReplaceAll(isbn, "-", "")
	digits := strings.Split(withoutDashes, "")
	if len(digits) != 10 {
		return false
	}
	if digits[9] == "X" {
		digits[9] = "10"
	}

	var numbers []int
	for _, d := range digits {
		number, _ := strconv.Atoi(d)
		numbers = append(numbers, number)
	}
	return calculate(numbers)%11 == 0

}

func calculate(d []int) int {
	if len(d) != 10 {
		return -1
	}

	return 10*d[0] + 9*d[1] + 8*d[2] + 7*d[3] + 6*d[4] + 5*d[5] + 4*d[6] + 3*d[7] + 2*d[8] + 1*d[9]
}
