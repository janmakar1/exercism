#include "eliuds_eggs.h"

#include <string.h>
#include <stdio.h>

unsigned int egg_count(unsigned int input) {
	unsigned int lines = 0;
	while(input > 0) {
		lines += input & 1;
		input >>= 1;
	}
	return lines;
}

