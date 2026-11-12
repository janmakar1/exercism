import java.util.List;
import java.util.ArrayList;
import java.util.Collections;

class HighScores {

    private List<Integer> highScores;
    private ArrayList<Integer> sorted;
    private ArrayList<Integer> topThree;

    public HighScores(List<Integer> highScores) {
        this.highScores = highScores;
        this.sorted = new ArrayList<>(this.highScores);
        Collections.sort(this.sorted);

        var temp = new ArrayList<>(this.sorted);
        Collections.sort(temp, Collections.reverseOrder());
        this.topThree = new ArrayList<>(3);
        for (int i = 0; i < 3; i++) {
            try {
                var item = temp.get(i);
                this.topThree.add(item);
            } catch (IndexOutOfBoundsException e) {
                break;
            }
        }
    }

    List<Integer> scores() {
        return this.highScores;
    }

    Integer latest() {
        int len = this.highScores.size();
        return this.highScores.get(len - 1);
    }

    Integer personalBest() {
        return sorted.get(sorted.size() - 1);
    }

    List<Integer> personalTopThree() {
        return this.topThree;
    }

}
