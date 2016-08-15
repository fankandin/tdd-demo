<?php
/**
 * @param $expected
 * @param array $ar
 */
function assertCalc($expected, array $ar) {
	$result = calc($ar);
	if ($expected === $result) {
		echo 'SUCCESS';
	} else {
		echo "FAIL. Expected: {$expected}, returned: ";
		print_r($result);
	}
	echo "\n";
}
