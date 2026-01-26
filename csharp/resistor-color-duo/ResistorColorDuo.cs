public static class ResistorColorDuo
{
    private static Dictionary<string, int> colorsToValuesDict = new()
    {
        {"black", 0},
        {"brown", 1},
        {"red", 2},
        {"orange", 3},
        {"yellow", 4},
        {"green", 5},
        {"blue", 6},
        {"violet", 7},
        {"grey", 8},
        {"white", 9},
    };


    public static int Value(string[] colors)
        => colorsToValuesDict[colors[0]] * 10 + colorsToValuesDict[colors[1]];
}
