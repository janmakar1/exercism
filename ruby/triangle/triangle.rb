class Triangle
  def initialize(arr)
    a = arr[0]  # probably better way..
    b = arr[1]
    c = arr[2]
    @satisfied = a + b >= c && b + c >= a && a + c >= b
    @sides = arr
    @unique_sides_cnt = arr.uniq.count
  end

  def equilateral?
    return false if @sides.all?(&:zero?)

    @satisfied && @unique_sides_cnt == 1
  end

  def isosceles?
    @satisfied && @unique_sides_cnt <= 2
  end

  def scalene?
    @satisfied && @unique_sides_cnt == 3
  end
end
