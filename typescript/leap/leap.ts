export function isLeap(n: number): boolean {
  if (n % 400 == 0) {
    return true;
  } else if (n % 100 == 0) {
    return false;
  } else {
    return n % 4 == 0;
  }
}
