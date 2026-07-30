const OUTER_RADIUS = 10;
const MIDDLE_RADIUS = 5;
const INNER_RADIUS = 1;

export const score = (x, y) => {
  const h = Math.hypot(x, y)
  if (h <= INNER_RADIUS) {
    return 10;
  } else if (h <= MIDDLE_RADIUS) {
    return 5;
  } else if (h <= OUTER_RADIUS) {
    return 1;
  } else {
    return 0;
  }
};
