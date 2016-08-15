<?php
/** Iteration 2 **/

include __DIR__ . '/../stockplay-assert.php';

function calc(array $ar)
{
	if (count($ar) <= 1) {
		return 0;
	}
	return $ar[array_keys($ar)[0]];
}

assertCalc(0, []); assertCalc(0, [0]); assertCalc(0, [1=>0, 0, 0]);

// Step 2. There is one non-zero element
assertCalc(0, [100]); // 2