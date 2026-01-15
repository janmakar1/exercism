module LogLevels

let message (logLine: string): string =
    let idx = logLine.IndexOf(":")
    logLine[idx+2..].Trim()

let logLevel(logLine: string): string =
    let idx2 = logLine.IndexOf("]")
    logLine[1..idx2-1].ToLower()

let reformat(logLine: string): string =
    message logLine + sprintf " (%s)" (logLevel logLine)
