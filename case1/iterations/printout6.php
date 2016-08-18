<?php
/** Iteration 6 **/

include __DIR__ . '/../stockplay-assert.php';

function calc(array $ar)
{
	if (count($ar) <= 1) {
		return 0;
	}

	$minValKeys = array_keys($ar, min($ar));
	// let's find the very first min
	$minValKey = min($minValKeys);
	$arSortedDesc = $ar;
	arsort($arSortedDesc);
	// if max is our problem, let's check all try all elements as max in a loop
	foreach ($arSortedDesc as $i=>$val) {
		if ($i > $minValKey) {
			// the array is sorted, so we can break after the max that later than min is found
			return $val - $ar[$minValKey];
		}
	}

	return 0;
}

assertCalc(0, []); assertCalc(0, [0]); assertCalc(0, [1=>0, 0, 0]);
assertCalc(0, [100]); // 2
assertCalc(10, [90, 100]); // 3
assertCalc(30, [90, 120, 100]); // 3
assertCalc(0, [120, 100, 90]); // 4
assertCalc(30, [90, 120, 100, 90]); // 5

// Step 6. The only max is the earliest. The prev. implementation can't catch it to compare
assertCalc(10, [120, 100, 90, 90, 100]); // 6
