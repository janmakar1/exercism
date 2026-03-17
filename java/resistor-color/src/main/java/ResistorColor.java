import java.util.stream.IntStream;

class ResistorColor {
    int colorCode(String color) {
        return IntStream.range(0, colors().length)
            .filter(i -> color.equals(colors()[i]))
            .findFirst()
            .orElse(-1);        
    }

    String[] colors() {
        return new String[] { 
            "black",
            "brown",
            "red",
            "orange",
            "yellow",
            "green",
            "blue",
            "violet",
            "grey" ,
            "white"
        };
    }
}
