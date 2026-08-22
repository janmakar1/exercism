<?php

declare(strict_types=1);

function factors(int $number): array
{
	$prime_factors = [];
	$potential_factor = 2;
	while($number > 1) {
		if ($number % $potential_factor == 0) {
			$prime_factors[] = $potential_factor;
			$number /= $potential_factor;
		} else {
			$potential_factor++;
		}
	}
	return $prime_factors;
}
