<?php

function quickSort(array $arr): array
{
    if (count($arr) == 1) {
        return $arr;
    }
    $pivot = $arr[0];
    $less = [];
    $bigger = [];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $pivot) {
            $bigger[] = $arr[$i];
        } else {
            $less[] = $arr[$i];
        }
    }
    return array_merge(quickSort($less), [$pivot], quickSort($bigger));
}

$arr = [4, 2, 7, 1, 3];

print_r(quickSort($arr));