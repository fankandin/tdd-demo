<?php
/** Iteration 5 **/

include __DIR__ . '/../stockplay-assert.php';

function calc(array $ar)
{
	if (count($ar) <= 1) {
		return 0;
	}

	// Let's compare earlists mins and latests maxs
	$minValKeys = array_keys($ar, min($ar));
	$maxValKeys = array_keys($ar, max($ar));
	if (max($maxValKeys) > min($minValKeys)) {
		// and calculate max and min again
		return $ar[max($maxValKeys)] - $ar[min($minValKeys)];
	}
	return 0;
}

assertCalc(0, []); assertCalc(0, [0]); assertCalc(0, [1=>0, 0, 0]);
assertCalc(0, [100]); // 2
assertCalc(10, [90, 100]); // 3
assertCalc(30, [90, 120, 100]); // 3
assertCalc(0, [120, 100, 90]); // 4

// Step 5. The prev. implementation doesn't assume there can be several mins and maxs.
assertCalc(30, [90, 120, 100, 90]); // 5
