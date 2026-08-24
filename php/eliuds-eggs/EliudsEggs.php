<?php

declare(strict_types=1);

class EliudsEggs
{
    public function eggCount(int $displayValue): int
    {
	    $ones = 0;
	    // throw new \BadMethodCallException("Implement the eggCount function");
	    while ($displayValue > 0) {
		$ones += $displayValue & 1;
		$displayValue >>= 1;
	    }
	    return $ones;
    }
}
