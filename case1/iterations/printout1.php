<?php
/** Iteration 1 **/

include __DIR__ . '/../stockplay-assert.php';

function calc(array $ar)
{
	if (count($ar) == 0) {
		return 0;
	}
	return $ar[array_keys($ar)[0]];
}

assertCalc(0, []);
// Step 1. Boundary conditions. There are elements, but zeros
assertCalc(0, [0]);
assertCalc(0, [1=>0, 0, 0]);