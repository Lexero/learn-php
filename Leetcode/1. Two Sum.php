<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum(array $nums, int $target): array
    {
        for ($f = 0; $f < count($nums); $f++){
            $num = $nums[$f];
            for ($i = 0; $i < count($nums); $i++) {
                if ($f === $i) {
                    continue;
                } elseif ($num + $nums[$i] === $target) {
                    $result = [$f, $i];
                }
            }
        }
        return $result;
    }
}
