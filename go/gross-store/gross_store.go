package gross

// Units stores the Gross Store unit measurements.
func Units() map[string]int {
	units := make(map[string]int)
	units["quarter_of_a_dozen"] = 3
	units["half_of_a_dozen"] = 6
	units["dozen"] = 12
	units["small_gross"] = 120
	units["gross"] = 144
	units["great_gross"] = 1728
	return units
}

// NewBill creates a new bill.
func NewBill() map[string]int {
	return map[string]int{}
}

// AddItem adds an item to customer bill.
func AddItem(bill, units map[string]int, item, unit string) bool {

	// Return false if the given unit is not in the units map.
	unitValue, exists := units[unit]
	if !exists {
		return false
	} else {
		// Otherwise add the item to the customer bill, indexed by the item name, then return true.
		// If the item is already present in the bill, increase its quantity by the amount that belongs to the provided unit.
		bill[item] += unitValue

		return true
	}

}

// RemoveItem removes an item from customer bill.
func RemoveItem(bill, units map[string]int, item, unit string) bool {
	// Return false if the given item is not in the bill
	itemQuantity, itemExistsInBill := bill[item]
	if !itemExistsInBill {
		return false
	}

	// Return false if the given unit is not in the units map.
	unitValue, unitExists := units[unit]
	if !unitExists {
		return false
	}

	// Return false if the new quantity would be less than 0.
	newItemQuantity := itemQuantity - unitValue
	if newItemQuantity < 0 {
		return false
	}

	// If the new quantity is 0, completely remove the item from the bill then return true.
	if newItemQuantity == 0 {
		delete(bill, item)
		return true
	}

	// Otherwise, reduce the quantity of the item and return true.
	bill[item] = newItemQuantity
	return true
}

// GetItem returns the quantity of an item that the customer has in his/her bill.
func GetItem(bill map[string]int, item string) (int, bool) {
	qty, exists := bill[item]
	return qty, exists
}
