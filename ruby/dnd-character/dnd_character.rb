class DndCharacter
  attr_reader :constitution, :strength, :dexterity, :intelligence, :wisdom, :charisma

  def self.modifier(input)
    # Your code here
    ((input - 10) / 2).floor
  end

  def initialize
    # Your code here
    @constitution = throw_dice
    @strength = throw_dice
    @dexterity = throw_dice
    @intelligence = throw_dice
    @wisdom = throw_dice
    @charisma = throw_dice
  end

  def hitpoints
    10 + DndCharacter.modifier(@constitution)
  end

  def throw_dice
    dices = []
    4.times do
      dices.push(rand(1..6))
    end
    dices.sort!.shift
    dices.sum
  end
end
