module EliudsEggs
  def self.egg_count(number)
    ones = 0
    while n.positive?
      ones += number & 1
      number >>= 1
    end
    ones
  end
end
