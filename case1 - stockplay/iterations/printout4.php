<?php
/** Iteration 4 **/

include __DIR__ . '/../stockplay-assert.php';

function calc(array $ar)
{
	if (count($ar) <= 1) {
		return 0;
	}

	// Let's check if max's index (day) is later than min's
	$minValKey = array_search(min($ar), $ar);
	$maxValKey = array_search(max($ar), $ar);
	if ($maxValKey > $minValKey) {
		return $ar[$maxValKey] - $ar[$minValKey];
	}
	return 0;
}

assertCalc(0, []); assertCalc(0, [0]); assertCalc(0, [1=>0, 0, 0]);
assertCalc(0, [100]); // 2
assertCalc(10, [90, 100]); // 3
assertCalc(30, [90, 120, 100]); // 3

/*
 * Step 4. Min happened after max, so (max - min) isn't something we can earn with
 */
assertCalc(0, [120, 100, 90]); // 4
