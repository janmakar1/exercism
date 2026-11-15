import java.util.Map;

class Darts {
    int score(double xOfDart, double yOfDart) {
        double hypot = Math.hypot(xOfDart, yOfDart);

        Map<Double, Integer> limits = Map.of(
            1.0, 10,
            5.0, 5,
            10.0, 1
            );

        for(var limit : limits.entrySet()) {
            if (hypot <= limit.getKey()) {
                return limit.getValue();
            }
        }
        return 0;
    }
}
