import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

class ResistorColorDuo {
    List<String> colorsList = new ArrayList<>(
        Arrays.asList(
            "black",
            "brown",
            "red",
            "orange",
            "yellow",
            "green",
            "blue",
            "violet",
            "grey",
            "white"
        )
    );

    int value(String[] colors) {
        return this.colorsList.indexOf(colors[0]) * 10 +
            this.colorsList.indexOf(colors[1]);
    }
}
