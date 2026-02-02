public class CarsAssemble {

    private final int carsPerHours = 221;

    private double successRate(int speed) {
        if (speed == 0) {
            return 0;
        } else if (speed <= 4) {
            return 1.0;
        } else if (speed <= 8) {
            return 0.9;
        } else if (speed == 9) {
            return 0.8;
        } else {
            return 0.77;
        }
    }

    public double productionRatePerHour(int speed) {
        return speed * this.carsPerHours * this.successRate(speed);
    }

    public int workingItemsPerMinute(int speed) {
        return (int) Math.floor(this.productionRatePerHour(speed) / 60);
    }
}
