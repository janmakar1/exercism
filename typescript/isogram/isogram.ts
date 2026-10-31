export function isIsogram(sentence: string): boolean {
  const letters = [...sentence.matchAll(/[a-zA-Z]/g)]
    .map((r) => r[0])
    .map((letter) => letter.toLowerCase())

  const uniqueLetters = new Set(letters)

  return letters.length === uniqueLetters.size
}
