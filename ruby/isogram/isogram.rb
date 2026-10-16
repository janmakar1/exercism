module Isogram
  def self.isogram?(word)
    true if word.empty?

    hash = {}
    ('a'..'z').each { |letter| hash[letter] = 0 }

    word.each_char do |letter_in_word|
      small_letter = letter_in_word.downcase
      hash[small_letter] += 1 if hash.include?(small_letter)
    end

    hash.each_value { |occurences| return false if occurences > 1 }

    true
  end
end
