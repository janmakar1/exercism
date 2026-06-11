package lasagnamaster

func PreparationTime(layers []string, preparationTimePerLayer int) int {
	if preparationTimePerLayer == 0 {
		preparationTimePerLayer = 2
	}
	return len(layers) * preparationTimePerLayer
}

func Quantities(layers []string) (noodles int, sauce float64) {
	for _, layer := range layers {
		if layer == "sauce" {
			sauce += 0.2
		} else if layer == "noodles" {
			noodles += 50
		}
	}

	return
}

func AddSecretIngredient(friendsIngredients, myIngredients []string) {
	secretIngredient := friendsIngredients[len(friendsIngredients)-1]
	myIngredients[len(myIngredients)-1] = secretIngredient
}

func ScaleRecipe(amounts []float64, portionsNumber int) []float64 {
	newRecipe := make([]float64, len(amounts))
	scale := float64(portionsNumber) / 2.0
	for idx := range newRecipe {
		newRecipe[idx] = amounts[idx] * scale
	}
	return newRecipe
}
