import java.math.BigInteger;

class Grains {

    BigInteger grainsOnSquare(final int square) {
        if (square > 64 || square < 1)
            throw new IllegalArgumentException("square must be between 1 and 64");
        return BigInteger.TWO.pow(square-1); 
    }

    BigInteger grainsOnBoard() {
        BigInteger sum = BigInteger.ZERO;
        for (int i = 1; i <= 64; i++) {
            sum = sum.add(grainsOnSquare(i));
        }
        return sum;
    }

}
