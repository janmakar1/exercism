public class EliudsEggs {
    public int eggCount(int number) {
        int ones = 0;
        while(number > 0) {
            ones += number & 1;
            number >>= 1;
        }
        return ones;
    }
}
