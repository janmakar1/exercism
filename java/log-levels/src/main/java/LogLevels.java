public class LogLevels {
    
    public static String message(String logLine) {
        var idx = logLine.indexOf(":");
        return logLine.substring(idx+2).trim();
    }
    
    public static String logLevel(String logLine) {
        var idx = logLine.indexOf(":");
        return logLine.substring(1, idx-1).toLowerCase();
    }

    public static String reformat(String logLine) {
        return message(logLine) + " (" + logLevel(logLine) + ")";
    }
}
