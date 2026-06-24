package triangle

type Kind int

const (
	NaT = iota // not a triangle
	Equ        // equilateral
	Iso        // isosceles
	Sca        // scalene
)

func KindFromSides(a, b, c float64) Kind {
	var k Kind

	if !triangleInequality(a, b, c) {
		k = NaT
	} else if allThreeEqual(a, b, c) {
		k = Equ
	} else if twoEqual(a, b, c) {
		k = Iso
	} else {
		k = Sca
	}

	return k
}

func triangleInequality(a, b, c float64) bool {
	if a <= 0 || b <= 0 || c <= 0 {
		return false
	}
	return a+b >= c && b+c >= a && a+c >= b
}

func allThreeEqual(a, b, c float64) bool {
	return a == b && a == c
}

func twoEqual(a, b, c float64) bool {
	return a == b || a == c || b == c
}
