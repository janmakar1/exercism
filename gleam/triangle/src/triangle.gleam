import gleam/list

fn are_not_zeroes(l: List(Float)) -> Bool {
  list.all(l, fn(x) { x != 0.0 })
}

fn inequality(a: Float, b: Float, c: Float) -> Bool {
  a +. b >=. c && b +. c >=. a && a +. c >=. b
}

pub fn equilateral(a: Float, b: Float, c: Float) -> Bool {
  let li = [a, b, c]
  let u = list.unique(li)
  are_not_zeroes(li) && list.length(u) == 1
}

pub fn isosceles(a: Float, b: Float, c: Float) -> Bool {
  let li = [a, b, c]
  let u = list.unique(li)
  inequality(a, b, c) && list.length(u) <= 2
}

pub fn scalene(a: Float, b: Float, c: Float) -> Bool {
  let li = [a, b, c]
  let u = list.unique(li)
  inequality(a, b, c) && list.length(u) == 3
}
