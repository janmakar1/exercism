package resistorcolor

// Colors returns the list of all colors.
func Colors() []string {
	return []string{
		"black",
		"brown",
		"red",
		"orange",
		"yellow",
		"green",
		"blue",
		"violet",
		"grey",
		"white",
	}
}

// ColorCode returns the resistance value of the given color.
func ColorCode(color string) int {
	for idx, c := range Colors() {
		if c == color {
			return idx
		}
	}
	// If there is no such color - I should return error,
	// but test suite specified another function prototype (return int)
	return -1
}
