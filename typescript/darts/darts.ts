export function score(x: number, y: number): number {
  const hypot = Math.hypot(x, y);
  if (hypot <= 1) {
    return 10;
  } else if (hypot <= 5) {
    return 5;
  } else if (hypot <= 10) {
    return 1;
  } else {
    return 0;
  }
}
