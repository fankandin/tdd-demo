<?php
/** Iteration 7 **/

include __DIR__ . '/../stockplay-assert.php';

function calc(array $ar)
{
	if (count($ar) <= 1) {
		return 0;
	}
	$arSortedAsc = $ar;
	asort($arSortedAsc);
	$arSortedDesc = $ar;
	arsort($arSortedDesc);
	$profit = 0;
	// let's do another loop, iterating over "mins"
	foreach ($arSortedAsc as $i=>$minVal) {
		// ... and over "maxs"
		foreach ($arSortedDesc as $j=>$maxVal) {
			if ($j > $i) {
				if ($maxVal - $minVal > $profit) {
					$profit = $maxVal - $minVal;
					// no more break, we have to check all pairs
				}
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

// Step 7. If max can be the earliest, min can also be the latest
assertCalc(10, [120, 100, 90, 90, 100, 80]); // 7