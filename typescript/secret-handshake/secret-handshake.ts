const meanings = ['wink', 'double blink', 'close your eyes', 'jump', 'Reverse']

export function commands(input: number): Array<string> {
  let index = 0
  const result: Array<string> = []
  while (input > 0) {
    const last_bit = input & 1
    if (last_bit === 1) {
      const m = meanings[index]
      if (m === "Reverse") {
        result.reverse()
      } else {
        result.push(m)
      }
    }
    input = Math.floor(input / 2)
    index++
  }
  return result
}
