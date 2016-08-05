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
    $arSortedAsc = $ar;
    asort($arSortedAsc);
    $arSortedDesc = $ar;
    arsort($arSortedDesc);
    $profit = 0;
    foreach ($arSortedAsc as $i=>$minVal) {
        foreach ($arSortedDesc as $j=>$maxVal) {
            if ($j > $i) {
                if ($maxVal - $minVal > $profit) {
                    $profit = $maxVal - $minVal;
                }
            }
        }
    }

    return $profit;
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
assertCalc(0, [120, 100, 90, 90]);
assertCalc(10, [120, 100, 90, 90, 100]);
assertCalc(10, [1=>120, 100, 90, 90, 100]);
assertCalc(10, [120, 100, 90, 90, 100, 80]);
