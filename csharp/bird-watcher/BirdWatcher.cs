class BirdCount
{
    private int[] birdsPerDay;

    public BirdCount(int[] birdsPerDay)
    {
        this.birdsPerDay = birdsPerDay;
    }

    public static int[] LastWeek()
        => [0, 2, 5, 3, 7, 8, 4];

    public int Today()
        => this.birdsPerDay.Last();

    public void IncrementTodaysCount()
    {
        var temp = this.birdsPerDay.Last();
        temp++;
        this.birdsPerDay.SetValue(temp, this.birdsPerDay.Length-1);
    }

    public bool HasDayWithoutBirds()
        => this.birdsPerDay.Any(i => i == 0);

    public int CountForFirstDays(int numberOfDays)
    {
        int s = 0;
        for(int i = 0; i < numberOfDays; i++)
        {
            s += this.birdsPerDay[i];
        }
        return s;
    }

    public int BusyDays()
    {
        int busyDays = 0;
        foreach (int day in this.birdsPerDay)
        {
            if (day >= 5)
            {
                busyDays++;
            }
        }
        return busyDays;
    }
}
