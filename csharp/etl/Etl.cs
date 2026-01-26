public static class Etl
{
    public static Dictionary<string, int> Transform(Dictionary<int, string[]> old)
    {
        Dictionary<string, int> transformed = [];

        foreach (var (occ, letters) in old)
        {
            foreach (var letter in letters)
            {
                transformed.Add(letter.ToLower(), occ);
            }
        }
        return transformed;
    }
}