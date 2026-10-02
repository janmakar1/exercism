class Darts
  def initialize(coord_x, coord_y)
    @hypot = Math.hypot(coord_x, coord_y)
  end

  def score
    if @hypot <= 1
      10
    elsif @hypot <= 5
      5
    elsif @hypot <= 10
      1
    else
      0
    end
  end
end
