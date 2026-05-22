// Package weather contains tools that can be used to utilize with weather forecast.
package weather

var (
// CurrentCondition stores information about current weather condition.
	CurrentCondition string
// CurrentLocation stores information about current weather location as string.
	CurrentLocation  string
)

// Forecast returns formatted string containing information about current weather conditions in the location.
func Forecast(city, condition string) string {
	CurrentLocation, CurrentCondition = city, condition
	return CurrentLocation + " - current weather condition: " + CurrentCondition
}
