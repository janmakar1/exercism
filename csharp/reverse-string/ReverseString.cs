using System.Text;

public static class ReverseString
{
    public static string Reverse(string input)
    {
        StringBuilder sb = new();
        foreach (var letter in input)
        {
            sb.Insert(0, letter);
        }
        return sb.ToString();
    }
}