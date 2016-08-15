<?php
/** Iteration 3 **/

include __DIR__ . '/../stockplay-assert.php';

function calc(array $ar)
{
	if (count($ar) <= 1) {
		return 0;
	}
	// Just calculate difference between max and min
	$min = min($ar);
	$max = max($ar);
	return ($max - $min);
}

assertCalc(0, []); assertCalc(0, [0]); assertCalc(0, [1=>0, 0, 0]);
assertCalc(0, [100]); // 2

// Step 3. Real elementary case. More than one element. We can earn
assertCalc(10, [90, 100]); // 3
assertCalc(30, [90, 120, 100]); // 3
