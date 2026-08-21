#include "prime_factors.h"

#include <stdbool.h>

size_t find_factors(uint64_t n, uint64_t factors[static MAXFACTORS]) {
        
        uint64_t potential_factor = 2;
        size_t index = 0; // also - amount of found factors - a value to return - will be based on this
        //bool went_inside = false;

        while (n > 1) {
                //went_inside = true;
                if (n % potential_factor == 0) {
                        factors[index] = potential_factor;
                        index++;
                        n /= potential_factor;
                } else {
                        potential_factor++;
                }
        }

        // return went_inside ? index + 1 : 0;
        return index;
}
