package booking

import "time"
import "fmt"

// Schedule returns a time.Time from a string containing a date.
func Schedule(date string) time.Time {

	layout := "1/2/2006 15:04:05"

	then, err := time.Parse(layout, date)

	if err != nil {
		fmt.Print("Error parsing string!: ")
		fmt.Println(err)
		fmt.Println("Time returned: ", then)
	}

	return then
}

// HasPassed returns whether a date has passed.
func HasPassed(date string) bool {
	layout := "January 2, 2006 15:04:05"

	then, err := time.Parse(layout, date)

	if err != nil {
		fmt.Print("Error parsing string!: ")
		fmt.Println(err)
		fmt.Println("Time returned: ", then)
	}

	return then.Before(time.Now())
}

// IsAfternoonAppointment returns whether a time is in the afternoon.
func IsAfternoonAppointment(date string) bool {

	layout := "Monday, January 2, 2006 15:04:05"

	then, err := time.Parse(layout, date)

	if err != nil {
		fmt.Print("Error parsing string!: ")
		fmt.Println(err)
		fmt.Println("Time returned: ", then)
	}

	hour := then.Hour()

	if hour >= 12 && hour < 18 {
		return true
	} else {
		return false
	}

}

// Description returns a formatted string of the appointment time.
func Description(date string) string {

	layout := "1/2/2006 15:04:05"

	then, err := time.Parse(layout, date)

	if err != nil {
		fmt.Print("Error parsing string!: ")
		fmt.Println(err)
		fmt.Println("Time returned: ", then)
	}

	return fmt.Sprintf("You have an appointment on %s, %s %d, %d, at %d:%d.", then.Weekday(), then.Month(), then.Day(), then.Year(), then.Hour(), then.Minute())

}

// AnniversaryDate returns a Time with this year's anniversary.
func AnniversaryDate() time.Time {
	currentYear := time.Now().Year()

	return time.Date(currentYear, time.September, 15, 0, 0, 0, 0, time.UTC)
}
