<?php
$ar = [
    1 => 110,
    2 => 90,
    3 => 95,
    4 => 125,
    5 => 120,
    6 => 100,
];
/**
 *
 */
function calc(array $ar)
{
    if (count($ar) <= 1) {
        return 0;
    }
    $minValKeys = array_keys($ar, min($ar));
    $maxValKeys = array_keys($ar, max($ar));
    if (max($maxValKeys) > min($minValKeys)) {
        return $ar[max($maxValKeys)] - $ar[min($minValKeys)];
    }
    return 0;
}

function assertCalc($expected, array $ar) {
    $result = calc($ar);
    if ($expected === $result) {
        echo 'SUCCESS';
    } else {
        echo "FAIL. Expected: {$expected}, returned: ";
        var_dump($result);
    }
    echo "\n";
}

assertCalc(0, []);
assertCalc(0, [0]);
assertCalc(0, [1=>0, 0, 0]);
assertCalc(0, [100]);
assertCalc(10, [90, 100]);
assertCalc(30, [90, 120, 100]);
assertCalc(0, [120, 100, 90]);
