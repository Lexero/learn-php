<?php

function binarySearch(array $array, int $item) {
    sort($array);
    $max = count($array);
    $min = 0;

    for ($i = 1; $i <= $max; $i++) {
        $middle = floor(($max + $min)/2);
        $tryToGuess = $array[$middle];
        if ($tryToGuess === $item) {
            return $middle;
        }
        elseif ($tryToGuess > $item) {
            $max = $middle - 1;
        }
        else {
            $min = $middle + 1;
        }
    }
    return "there are no $item in the array";
}

$arr = [1 ,4 ,5 ,6 , 9 , 13, 15];

echo (binarySearch($arr, 13));
