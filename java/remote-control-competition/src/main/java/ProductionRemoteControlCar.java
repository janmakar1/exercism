class ProductionRemoteControlCar implements RemoteControlCar, Comparable {

    private int distanceTravelled = 0;
    private int numberOfVictories = 0;

    public void drive() {
        this.distanceTravelled += 10;
    }

    public int getDistanceTravelled() {
        return this.distanceTravelled;
    }

    public int getNumberOfVictories() {
        return this.numberOfVictories;
    }

    public void setNumberOfVictories(int numberOfVictories) {
        this.numberOfVictories = numberOfVictories;
    }

    @Override
    public int compareTo(Object otherObject) {
        // -1 to sort in ascending way
        return -1 * Integer.compare(
            numberOfVictories, 
            ((ProductionRemoteControlCar)otherObject).numberOfVictories
        );
    }
}
