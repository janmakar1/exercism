public class Player
{
    private readonly Random random;

    public Player()
    {
        this.random = new Random();
    }

    public int RollDie() => this.random.Next(1, 19);

    public double GenerateSpellStrength() => this.random.NextDouble() * 100;
}
