module ArmstrongNumbers
  def self.include?(number)
    sum = 0
    exp = number.to_s.length
    number.to_s.each_char do |digit_s|
      digit = digit_s.to_i
      sum += digit**exp
    end
    sum == number
  end
end
