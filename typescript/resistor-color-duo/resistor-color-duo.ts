const COLORS = ['black', 'brown', 'red', 'orange', 'yellow', 'green', 'blue', 'violet', 'grey', 'white'];

export function decodedValue(colorsNames: string[]) {
  return 10 * COLORS.indexOf(colorsNames[0]) + COLORS.indexOf(colorsNames[1]);
}
