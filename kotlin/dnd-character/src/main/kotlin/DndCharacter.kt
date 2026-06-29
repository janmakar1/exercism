import kotlin.math.floor
import kotlin.random.Random

class DndCharacter {
    val strength: Int = rollDice()
    val dexterity: Int = rollDice()
    val constitution: Int = rollDice()
    val intelligence: Int = rollDice()
    val wisdom: Int = rollDice()
    val charisma: Int = rollDice()

    val hitpoints: Int = 10 + DndCharacter.modifier(constitution)

    companion object {
        fun ability(): Int {
            val obj = DndCharacter()

            val abilities =
                listOf(
                    obj.strength,
                    obj.dexterity,
                    obj.constitution,
                    obj.intelligence,
                    obj.wisdom,
                    obj.charisma,
                )
            return abilities.random()
        }

        fun modifier(score: Int): Int {
            val difference = score - 10
            val modifierNotRounded = difference / 2.0
            return floor(modifierNotRounded).toInt()
        }

        private fun rollDice(): Int {
            val list = List(4) { Random.nextInt(6) }
            return list.sorted().take(3).sum()
        }
    }
}
