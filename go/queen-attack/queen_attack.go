package queenattack

import "errors"

var m map[byte]int = map[byte]int{
	'a': 0,
	'b': 1,
	'1': 1,
	'c': 2,
	'2': 2,
	'd': 3,
	'3': 3,
	'e': 4,
	'4': 4,
	'f': 5,
	'5': 5,
	'g': 6,
	'6': 6,
	'h': 7,
	'7': 7,
}

func abs(i int) int {
	if i < 0 {
		return -1 * i
	}
	return i
}

func CanQueenAttack(whitePosition, blackPosition string) (bool, error) {
	if len(whitePosition) != 2 || len(blackPosition) != 2 {
		return false, errors.New("wrong syntax for chess position")
	}
	if whitePosition == blackPosition {
		return false, errors.New("wrong position")
	}
	xWhiteQueen, xWhiteQueenExists := m[whitePosition[0]]
	yWhiteQueen, yWhiteQueenExists := m[whitePosition[1]]
	xBlackQueen, xBlackQueenExists := m[blackPosition[0]]
	yBlackQueen, yBlackQueenExists := m[blackPosition[1]]

	if !xWhiteQueenExists || !yWhiteQueenExists || !xBlackQueenExists || !yBlackQueenExists {
		return false, errors.New("wrong position")
	}
	xDiff := abs(xWhiteQueen - xBlackQueen)
	yDiff := abs(yWhiteQueen - yBlackQueen)

	return xDiff == yDiff || xDiff == 0 || yDiff == 0, nil
}
