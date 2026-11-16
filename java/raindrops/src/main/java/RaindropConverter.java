class RaindropConverter {

    private boolean isDivisable(int number, int divisor) {
        return number % divisor == 0;
    }

    String convert(int number) {
        if (!isDivisable(number, 3) && !isDivisable(number,5) && !isDivisable(number, 7)) {
            return String.valueOf(number);
        } else {
            StringBuilder sb = new StringBuilder();
            if (isDivisable(number,3)) {
                sb.append("Pling");
            }
            if (isDivisable(number,5)) {
                sb.append("Plang");
            }
            if (isDivisable(number, 7)) {
                sb.append("Plong");
            }
            return sb.toString();
        }
    }

}
