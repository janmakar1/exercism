static class LogLine
{
    public static string Message(string logLine)
    {
        var idx = logLine.IndexOf(':');
        return logLine[(idx + 1)..]
            .Trim();
    }

    public static string LogLevel(string logLine)
    {
        var idx = logLine.IndexOf(':');
        return logLine[..idx]
            .Trim()
            .Replace('[', ' ')
            .Replace(']', ' ')
            .Trim()
            .ToLower();
    }

    public static string Reformat(string logLine) => $"{Message(logLine)} ({LogLevel(logLine)})";
}
