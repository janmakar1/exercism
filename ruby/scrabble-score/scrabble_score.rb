class Scrabble
  Scrabble::VALUES = {
    'a': 1,
    'e': 1,
    'i': 1,
    'o': 1,
    'u': 1,
    'l': 1,
    'n': 1,
    'r': 1,
    's': 1,
    't': 1,
    'd': 2,
    'g': 2,
    'b': 3,
    'c': 3,
    'm': 3,
    'p': 3,
    'f': 4,
    'h': 4,
    'v': 4,
    'w': 4,
    'y': 4,
    'k': 5,
    'j': 8,
    'x': 8,
    'q': 10,
    'z': 10
  }.freeze

  def initialize(sentence)
    @sentence = sentence
  end

  def score
    result = 0
    letters = @sentence.split('')
    letters.each do |letter|
      single_val = Scrabble::VALUES[letter.downcase.to_sym]
      result += (single_val.nil? ? 0 : single_val)
    end
    result
  end
end
