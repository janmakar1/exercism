import java.util.List;
import java.util.Set;

class Triangle {

    private List<Double> sides;

    Triangle(double side1, double side2, double side3) throws TriangleException {
        if (isCorrectTriangle(side1, side2, side3)) {
            this.sides = List.of(side1, side2, side3);
        } else {
            throw new TriangleException();
        }
    }

    private boolean isCorrectTriangle(double a, double b, double c) {
        return a != 0 && b != 0 && c != 0 && a + b >= c && b + c >= a && a + c >= b;
    }

    boolean isEquilateral() {
        return Set.copyOf(this.sides).size() == 1;
    }

    boolean isIsosceles() {
        return Set.copyOf(this.sides).size() <= 2;
    }

    boolean isScalene() {
        return Set.copyOf(this.sides).size() == 3;
    }

}
