module Pangram
  def self.pangram?(str)
    return false if str.empty?

    hash = {}
    ('a'..'z').each do |letter_in_alphabet|
      hash[letter_in_alphabet] = 0
    end

    str.each_char do |char|
      hash[char.downcase] += 1 if hash.key?(char.downcase)
    end

    hash.values.all? { |occurences| occurences >= 1 }
  end
end
