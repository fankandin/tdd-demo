<?php
/** Iteration 8 **/

include __DIR__ . '/../stockplay-assert.php';

function calc(array $ar)
{
	$profit = 0;
	// In fact we have got the Cartesian product. Why to sort then?
	foreach ($ar as $i=>$minVal) {
		foreach ($ar as $j=>$maxVal) {
			if (($j > $i) && ($maxVal - $minVal > $profit)) {
				$profit = $maxVal - $minVal;
			}
		}
	}

	return $profit;
}

assertCalc(0, []); assertCalc(0, [0]); assertCalc(0, [1=>0, 0, 0]);
assertCalc(0, [100]); // 2
assertCalc(10, [90, 100]); // 3
assertCalc(30, [90, 120, 100]); // 3
assertCalc(0, [120, 100, 90]); // 4
assertCalc(30, [90, 120, 100, 90]); // 5
assertCalc(10, [120, 100, 90, 90, 100]); // 6
assertCalc(10, [1=>120, 100, 90, 90, 100]); // 6
assertCalc(10, [120, 100, 90, 90, 100, 80]); // 7

// Step 8. The program works and tested. Let's refactor for a nicer
assertCalc(35, [
	1 => 110,
	2 => 90,
	3 => 95,
	4 => 125,
	5 => 120,
	6 => 100,
]); // 8
