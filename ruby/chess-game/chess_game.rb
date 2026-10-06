module Chess
  Chess::RANKS = 1..8
  Chess::FILES = 'A'..'H'

  def self.valid_square?(rank, file)
    Chess::RANKS.include?(rank) && Chess::FILES.include?(file)
  end

  def self.nickname(first_name, last_name)
    first_name[...2].upcase + last_name[-2..].upcase
  end

  def self.move_message(first_name, last_name, square)
    rank = square[1].to_i
    file = square[0]
    if !valid_square?(rank, file)
      "#{nickname(first_name, last_name)} attempted to move to #{square}, but that is not a valid square"
    else
      "#{nickname(first_name, last_name)} moved to #{square}"
    end
  end
end
