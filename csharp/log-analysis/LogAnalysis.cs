public static class LogAnalysis 
{
    public static string SubstringAfter(this string thisString, string str)
    {
        var index = thisString.IndexOf(str) + str.Length;
        return thisString[index..];
    } 

    public static string SubstringBetween(this string thisString, string str1, string str2)
    {
        var startIndex = thisString.IndexOf(str1) + str1.Length;
        var endIndex = thisString.IndexOf(str2);
        var substringLength = endIndex - startIndex;
        return thisString.Substring(startIndex, substringLength);
    } 
    
    public static string Message(this string thisString) => SubstringAfter(thisString, ": ");
    
    public static string LogLevel(this string thisString) => SubstringBetween(thisString, "[", "]");
}
