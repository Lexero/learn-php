<?php

function selectionSort($arr) {
    for ($i = 0; $i < count($arr); $i++) {
        $low = $i;
        for ($n = $i + 1; $n < count($arr); $n++) {
            if ($arr[$n] < $arr[$low]) {
                $low = $n;
            }
        }
        $swap = $arr[$i];
        $arr[$i] = $arr[$low];
        $arr[$low] = $swap;
    }
    return $arr;
}

$array = [3, 5, 1, 8, 2, 20];
print_r(selectionSort($array));
