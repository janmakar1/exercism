function replace(input: string): string {
  // TODO: refactor to switch or to hash (Object)
  /*switch (input) {
    case 'G':

  }*/
 if (input == 'G') {
   return 'C';
 } else if (input == 'C') {
   return 'G';
 } else if (input == 'T') {
   return 'A';
 } else if (input == 'A') {
   return 'U';
 } else {
    throw new Error("Invalid input DNA.");
 }
}

export function toRna(strand: string): string {
  let result: string = "";
  let arr: string[] = strand.split('');
  arr.forEach((elem) => { result += replace(elem) });

  return result;
}
