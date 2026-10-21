export function transform(input: { [key: string]: string[] })
  : { [key: string]: number }
{
  const output : { [key: string]: number } = {};

  for (const points in input) {
    const letters = input[points];

    letters.forEach((letter) => {
      const small_letter = letter.toLowerCase();
      output[small_letter] = Number(points);
    });

  }

  return output;
}
