<?php

function maxElements(array $arr): int
{
    if (count($arr) == 1) {
        return $arr[0];
    } elseif ($arr[0] < $arr[1]) {
        return MaxElements(array_splice($arr, 1));
    } else {
        array_splice($arr, 1, 1);
        return MaxElements($arr);
    }
}

$arr = [2, 4, 6, 8, 10];

echo (maxElements($arr));