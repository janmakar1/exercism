export function format(name: string, number: number): string {
  const twoLastDecimals : number = number % 100;
  let suffix: string = "";

  if (twoLastDecimals == 11 || twoLastDecimals == 12 || twoLastDecimals == 13) {
    suffix = "th";
  } else {
    const lastDecimal = number % 10;
    if (lastDecimal == 1) {
      suffix = "st";
    } else if (lastDecimal == 2) {
      suffix = "nd";
    } else if (lastDecimal == 3) {
      suffix = "rd";
    } else {
      suffix = "th";
    }
  }

  return `${name}, you are the ${number}${suffix} customer we serve today. Thank you!`;
}
