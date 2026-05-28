package leap

// IsLeapYear should return boolean if year given as an argument, is leap.
func IsLeapYear(year int) bool {
	return year % 400 == 0 || (year % 100 != 0 && year % 4 == 0)
}
