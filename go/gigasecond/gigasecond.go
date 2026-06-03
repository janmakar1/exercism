// Package gigasecond contains AddGigasecond function
package gigasecond

// import path for the time package from the standard library.
import "time"

// AddGigasecond returns time Struct 1 Gs after the given parameter.
func AddGigasecond(t time.Time) time.Time {
	gigasecond := time.Second * 1_000_000_000
	return t.Add(gigasecond)
}
