// twofer contains ShareWith function
package twofer

// ShareWith return greeting depending if name argument is given
func ShareWith(name string) string {
	if name != "" {
		return "One for " + name + ", one for me."
	} else {
		return "One for you, one for me."
	}
}
