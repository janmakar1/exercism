package lasagnamaster

func PreparationTime(layers []string, preparationTimePerLayer int) int {
	if preparationTimePerLayer == 0 {
		preparationTimePerLayer = 2
	}
	return len(layers) * preparationTimePerLayer
}

func Quantities(layers []string) (noodles int, sauce float64) {
	var sauceQnt, noodlesQnt int

	for _, layer := range layers {
		if layer == "sauce" {
			sauceQnt += 1
		}
		if layer == "noodles" {
			noodlesQnt += 1
		}
	}

	noodles = noodlesQnt * 50
	sauce = float64(sauceQnt) * 0.2
	return
}

func AddSecretIngredient(friendsIngredients, myIngredients []string) {
	secretIngredient := friendsIngredients[len(friendsIngredients)-1]
	myIngredients[len(myIngredients)-1] = secretIngredient
}

func ScaleRecipe(amounts []float64, portionsNumber int) []float64 {
	newRecipe := make([]float64, len(amounts))
	copy(newRecipe, amounts)
	scale := float64(portionsNumber) / 2.0
	for idx, oldAmount := range newRecipe {
		newRecipe[idx] = oldAmount * scale
	}
	return newRecipe
}
