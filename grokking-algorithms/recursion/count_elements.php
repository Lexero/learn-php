<?php

function countElements(array $arr): int
{
    if ($arr == []) {
        return 0;
    } else {
        return 1 + CountElements(array_splice($arr, 1));
    }
}

$arr = [2, 4, 6, 8, 10];

echo (CountElements($arr));