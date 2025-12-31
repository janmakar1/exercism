#include "difference_of_squares.h"

unsigned int sum_of_squares(unsigned int number) {
    unsigned int s = 0;
    for(unsigned int i = 0; i <= number; i++) {
        s += i * i;
    }
    return s;
}

unsigned int square_of_sum(unsigned int number) {
    unsigned int s = 0;
        for(unsigned int i = 0; i <= number; i++) {
            s += i;
        }
        return s * s;
}

unsigned int difference_of_squares(unsigned int number) {
    if (sum_of_squares(number) > square_of_sum(number)) {
        return sum_of_squares(number) - square_of_sum(number);
    } else {
        return square_of_sum(number) - sum_of_squares(number);
    }
}