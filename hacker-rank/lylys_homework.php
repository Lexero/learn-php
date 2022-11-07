<?php

function lilysHomework($arr) {
    // Write your code here
    $counter = 0;
    for ($i = 1; $i < count($arr); $i++)
    {
        $min = $i;

        for ($j = $i + 1; $j < count($arr); $j++)
        {
            if ($arr[$j] < $arr[$min])
            {
                $min = $j;
                $counter++;
            }
        }

        $temp = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min] = $temp;
    }
    return $counter;
}