<?php
/** Iteration 0 **/

include __DIR__ . '/../stockplay-assert.php';

function calc(array $ar)
{
	if (count($ar) == 0) {
		return 0;
	}
}

// Step 0. Boundary conditions
assertCalc(0, []);
