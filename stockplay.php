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
    if (count($ar) == 0) {
        return 0;
    }
    return $ar[array_keys($ar)[0]];
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


