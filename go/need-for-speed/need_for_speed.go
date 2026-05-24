package speed

// TODO: define the 'Car' type struct
type Car struct {
	battery      int
	batteryDrain int
	speed        int
	distance     int
}

// NewCar creates a new remote controlled car with full battery and given specifications.
func NewCar(speed, batteryDrain int) Car {
	nc := Car{
		battery:      100,
		batteryDrain: batteryDrain,
		speed:        speed,
		distance:     0,
	}
	return nc
}

// TODO: define the 'Track' type struct
type Track struct {
	distance int
}

// NewTrack creates a new track
func NewTrack(distance int) Track {
	return Track{
		distance: distance,
	}
}

// Drive drives the car one time. If there is not enough battery to drive one more time,
// the car will not move.
func Drive(car Car) Car {
	var newBatteryVal = car.battery - car.batteryDrain
	if newBatteryVal < 0 {
		return car
	} else {

		return Car{
			battery:      newBatteryVal,
			batteryDrain: car.batteryDrain,
			distance:     car.distance + car.speed,
			speed:        car.speed,
		}
	}
}

// CanFinish checks if a car is able to finish a certain track.
func CanFinish(car Car, track Track) bool {
	var howManyRides int = car.battery / car.batteryDrain
	var maxDistance int = car.speed * howManyRides
	return maxDistance >= track.distance
}
