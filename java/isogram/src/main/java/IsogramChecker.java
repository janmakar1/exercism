import java.util.HashSet;
import java.util.Set;

class IsogramChecker {

    boolean isIsogram(String phrase) {
        Set<Character> set = new HashSet<>();
        for (char character : phrase.toLowerCase().toCharArray()) {
            if (Character.isLetter(character) ) {
                if (set.contains(character)) {
                    return false;
                } else {
                    set.add(character);
                }
            }
        }
        return true;
    }
}
