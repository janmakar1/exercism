package darts

import "math"

const outerRadius float64 = 10
const middleRadius float64 = 5
const innerRadius float64 = 1

func Score(x, y float64) int {

	distance := math.Hypot(x, y)

	if distance <= innerRadius {
		return 10
	} else if distance <= middleRadius {
		return 5
	} else if distance <= outerRadius {
		return 1
	} else {
		return 0
	}

}
