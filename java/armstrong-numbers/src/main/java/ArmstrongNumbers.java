class ArmstrongNumbers {

    boolean isArmstrongNumber(int numberToCheck) {
        if (numberToCheck == 0) {
            return true;
        }

        int numberCopy = numberToCheck;
        int amountOfDigits = (int) (Math.nextDown(Math.log10(numberToCheck)) + 1.0d);
        int sum = 0;
        for(int i = 0; i < amountOfDigits; i++) {
            int digit = numberCopy % 10;
            numberCopy /= 10;
            sum += Math.pow(digit, amountOfDigits);
        }
        
        return sum == numberToCheck;
    }

}
