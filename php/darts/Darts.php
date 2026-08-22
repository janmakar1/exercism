<?php

declare(strict_types=1);

const INNER = 1;
const MIDDLE = 5;
const OUTER = 10;

function score(float $xAxis, float $yAxis): int
{
	$hyp = hypot($xAxis, $yAxis);
	if ($hyp <= INNER) {
		return 10;
	} elseif ($hyp <= MIDDLE) {
		return 5;
	} elseif ($hyp <= OUTER) {
		return 1;
	}
	return 0;
}
