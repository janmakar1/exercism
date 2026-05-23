package purchase

// NeedsLicense determines whether a license is needed to drive a type of vehicle. Only "car" and "truck" require a license.
func NeedsLicense(kind string) bool {
	if kind == "car" || kind == "truck" {
		return true
	} else {
		return false
	}
}

// ChooseVehicle recommends a vehicle for selection. It always recommends the vehicle that comes first in lexicographical order.
func ChooseVehicle(option1, option2 string) string {
	var betterOption string
	if option1 < option2 {
		betterOption = option1
	} else {
		betterOption = option2
	}
	return betterOption + " is clearly the better choice."
}

// CalculateResellPrice calculates how much a vehicle can resell for at a certain age.
func CalculateResellPrice(originalPrice, age float64) float64 {
	var x float64
	if age < 3 {
		x = 0.8
	} else if age >= 10 {
		x = 0.5
	} else {
		x = 0.7
	}
	return x * originalPrice
}
