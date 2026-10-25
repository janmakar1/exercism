export class Triangle {
  sides: number[]
  correct: boolean

  constructor(...sides: number[]) {
    this.sides = sides
    let [a, b, c] = [...sides]
    this.correct = (a + b >= c && b + c >= a && a + c >= b)
  }

  get isEquilateral() {
    const uniq = new Set(this.sides)
    return (uniq.size === 1 && this.sides[0] !== 0)
  }

  get isIsosceles() {
    const uniq = new Set(this.sides)
    return (this.correct && uniq.size <= 2)
  }

  get isScalene() {
    const uniq = new Set(this.sides)
    return (this.correct && uniq.size === 3)
  }
}
