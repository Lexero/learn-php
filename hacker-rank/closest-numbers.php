<?php
function closestNumbers ($arr): array
{
    // Write your code here
    sort($arr);
    $length = count($arr);
    $gap = PHP_INT_MAX;
    $resultArray = [];

    for ($i = 1; $i < $length; $i++) {
        $difference = abs($arr[$i] - $arr[$i + 1]);
        if ($difference < $gap) {
            $gap = $difference;
            $resultArray = [$arr[$i], $arr[$i + 1]];
        } elseif ($difference == $gap) {
            array_push ($resultArray, $arr[$i], $arr[$i + 1]);
        }
    }

    return $resultArray;
}

$arr = [-5,15,25,71,63];
print_r (closestNumbers($arr));