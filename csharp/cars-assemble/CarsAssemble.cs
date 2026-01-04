static class AssemblyLine
{
    public static double SuccessRate(int speed)
    {
        if (speed == 0) {
            return 0;
        } else if (speed >= 1 && speed < 5) {
            return 1.0;
        } else if (speed >= 5 && speed < 9) {
            return 0.9;
        } else if (speed == 9) {
            return 0.8;
        } else {
            return 0.77;
        }
    }
    
    public static double ProductionRatePerHour(int speed)
        => speed * 221 * SuccessRate(speed);

    public static int WorkingItemsPerMinute(int speed)
        => (int) Math.Floor(ProductionRatePerHour(speed) / 60);
}
