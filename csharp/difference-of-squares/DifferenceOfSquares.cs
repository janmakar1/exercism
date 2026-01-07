public static class DifferenceOfSquares
{
    public static int CalculateSquareOfSum(int max)
    {
        int sum = 0;
        for (int i = 1; i <= max; i++)
        {
            sum += i;
        }
        return (int)Math.Pow(sum, 2.0);
    }

    public static int CalculateSumOfSquares(int max)
    {
        int s = 0;
        for (int i = 1; i <= max; i++)
        {
            s += i * i;
        }
        return s;
    }

    public static int CalculateDifferenceOfSquares(int max)
    {
        int squareOfSum = CalculateSquareOfSum(max);
        int sumOfSquares = CalculateSumOfSquares(max);
        return squareOfSum >= sumOfSquares ? squareOfSum - sumOfSquares : sumOfSquares - squareOfSum;
    }
}