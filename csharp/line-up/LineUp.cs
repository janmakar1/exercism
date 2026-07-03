public static class LineUp
{
    public static string Format(string name, int number)
    {
        var lastTwoDigits = number % 100;
        var lastDigit = number % 10;
        string ending;
        if (lastTwoDigits == 11 || lastTwoDigits == 12 || lastTwoDigits == 13) {
            ending = "th";
        } else if (lastDigit == 1) {
            ending = "st";
        } else if (lastDigit == 2) {
            ending = "nd"; 
        } else if (lastDigit == 3) {
            ending = "rd"; 
        } else {
            ending = "th";
        }
        return name + ", you are the " + number + ending + " customer we serve today. Thank you!";
    }
}
