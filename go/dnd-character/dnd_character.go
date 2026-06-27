package dndcharacter

import "math/rand"
import "slices"
import "math"

type Character struct {
	Strength     int
	Dexterity    int
	Constitution int
	Intelligence int
	Wisdom       int
	Charisma     int
	Hitpoints    int
}

func throwD6() int {
	return rand.Intn(6) + 1
}

// Modifier calculates the ability modifier for a given ability score
func Modifier(score int) int {
	return int(math.Floor(float64(score-10) / 2))
}

// Ability uses randomness to generate the score for an ability
func Ability() int {
	var dice []int
	for i := 0; i < 4; i++ {
		dice = append(dice, throwD6())
	}
	slices.Sort(dice)
	s := 0
	for _, elem := range dice[1:] {
		s += elem
	}
	return s

}

// GenerateCharacter creates a new Character with random scores for abilities
func GenerateCharacter() Character {
	ch := Character{
		Strength:     Ability(),
		Dexterity:    Ability(),
		Constitution: Ability(),
		Intelligence: Ability(),
		Wisdom:       Ability(),
		Charisma:     Ability(),
	}
	ch.Hitpoints = 10 + Modifier(ch.Constitution)
	return ch
}
