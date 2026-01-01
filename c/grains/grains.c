#include "grains.h"

#include <math.h>

uint64_t square(uint8_t index) {
    uint64_t result = pow(2, index - 1);
    return result;
}

uint64_t total(void) {
    uint64_t result = 0;
    for(uint8_t index = 1; index <= 64; index++) {
        result += square(index);
    }
    return result;
}
