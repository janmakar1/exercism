module Acronym
  def self.abbreviate(sentence)
    accr = ''
    sentence.gsub!(/[-_]/, ' ')
    words = sentence.split(' ')
    words.each { |word| accr += word[0].upcase }
    accr
  end
end
