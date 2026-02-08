import java.util.HashMap;
import java.util.Map;

class IsogramChecker {

    boolean isIsogram(String phrase) {
        Map<Character, Integer> map = new HashMap<>();
        for (char character : phrase.toLowerCase().toCharArray()) {
            if (Character.isLetter(character) ) {
                if (map.containsKey(character)) {
                    return false;
                } else {
                    map.put(character, 1);
                }
            }
        }
        return true;
    }
}
