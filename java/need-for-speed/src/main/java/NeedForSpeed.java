class NeedForSpeed {

    int speed;
    int batteryDrain;

    int battery = 100;
    int distance = 0;

    NeedForSpeed(int speed, int batteryDrain) {
        this.speed = speed;
        this.batteryDrain = batteryDrain;
    }

    public boolean batteryDrained() {
        return battery < batteryDrain;
    }

    public int distanceDriven() {
        return this.distance;
    }

    public void drive() {
        if (this.battery > 0) {
            this.distance += speed;
            this.battery -= batteryDrain; 
        }
    }

    public static NeedForSpeed nitro() {
        return new NeedForSpeed(50, 4);
    }
}

class RaceTrack {

    int distance;

    RaceTrack(int distance) {
        this.distance = distance;
    }

    public boolean canFinishRace(NeedForSpeed car) {
        double howManyTimes = (100 / car.batteryDrain);
        double distanceDrivenWithFullDrainOfBattery = howManyTimes
             * car.speed;
        return distanceDrivenWithFullDrainOfBattery >= this.distance;
    }
}
