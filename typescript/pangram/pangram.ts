export function isPangram(sentence: string): boolean {
  const letters = new Set(sentence.toLowerCase())

  const nonLetters = [' ', '_', '-', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '"', "'", '.']

  nonLetters.forEach((nonLetter) => {
    letters.delete(nonLetter)
  })

  return letters.size === 26
}
