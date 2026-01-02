#include "collatz_conjecture.h"

int steps(int start) {
    int result_steps = 0;

    if (start <= 0) {
        return ERROR_VALUE;
    }

    while(start != 1) {
        if (start % 2 == 0) {
            start /= 2;
        } else {
            start = 3 * start + 1;
        }
        result_steps++;
    }
    return result_steps;
}
