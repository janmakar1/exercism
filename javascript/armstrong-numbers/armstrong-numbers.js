//
// This is only a SKELETON file for the 'Armstrong Numbers' exercise. It's been provided as a
// convenience to get you started writing code faster.
//

export const isArmstrongNumber = (num) => {
  
  let s; 
  const str = num.toString();
  let amountOfDigits;
  let convert;

  if (typeof(num) === 'bigint') {
    amountOfDigits = BigInt(str.length);
    s = 0n;
    convert = BigInt;
  } else {
    amountOfDigits = str.length
    s = 0;
    convert = parseInt;
  }

  for (let i = 0; i < amountOfDigits; i++) {
    let d = convert(str[i]);
    s += d ** amountOfDigits;
  }
  return s == num;

};

