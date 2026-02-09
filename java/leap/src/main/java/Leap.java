class Leap {

    boolean isLeapYear(int year) {
        var isDivisableBy4 = year % 4 == 0;
        var isDivisableBy100 = year % 100 == 0;
        var isDivisableBy400 = year % 400 == 0;

        if (isDivisableBy400) {
            return isDivisableBy400;
        } else if (isDivisableBy100) {
            return !isDivisableBy100;
        } else {
            return isDivisableBy4;
        }
    }

}
