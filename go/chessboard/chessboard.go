package chessboard

// Type File stores if a square is occupied by a piece - this is a slice of bools
type File []bool

// Type Chessboard contains a map of eight Files, accessed with keys from "A" to "H"
type Chessboard map[string]File

// CountInFile returns how many squares are occupied in the chessboard,
// within the given file.
func CountInFile(cb Chessboard, file string) int {
	ourFile, _ := cb[file]

	count := 0
	for _, b := range ourFile {
		if b {
			count++
		}
	}
	return count
}

// CountInRank returns how many squares are occupied in the chessboard,
// within the given rank.
func CountInRank(cb Chessboard, rank int) int {
	if rank > 8 || rank < 1 {
		return 0
	}

	count := 0
	for _, r := range cb {
		if r[rank-1] {
			count++
		}
	}
	return count

}

func countSquares(cb Chessboard, occupiedOnly bool) int {
	count := 0

	for _, rank := range cb {
		for _, square := range rank {
			if occupiedOnly {
				if square {
					count++
				}
			} else {
				count++
			}
		}
	}
	return count
}

// CountAll should count how many squares are present in the chessboard.
func CountAll(cb Chessboard) int {
	return countSquares(cb, false)
}

// CountOccupied returns how many squares are occupied in the chessboard.
func CountOccupied(cb Chessboard) int {
	return countSquares(cb, true)
}
