<?php

function sum(array $arr) {
    if (count($arr) == 1) {
        return $arr[0];
    } else {
        return $arr[0] + Sum(array_splice($arr, 1));
    }
}


$arr = [2, 4, 6, 8, 10];

print_r(Sum($arr));