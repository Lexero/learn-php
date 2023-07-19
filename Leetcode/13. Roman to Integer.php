<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    static function romanToInt(string $s): int
    {
        $result = 0;
        for ($i = 0; $s[$i] !== ""; $i++) {
            if ($s[$i] === "M") {
                $result += 1000;
            } elseif (($s[$i] . $s[$i + 1]) == "CM") {
                $result += 900;
                $i += 1;
            } elseif ($s[$i] === "D") {
                $result += 500;
            } elseif ($s[$i] . $s[$i + 1] == "CD") {
                $result += 400;
                $i += 1;
            } elseif ($s[$i] === "C") {
                $result += 100;
            } elseif ($s[$i] . $s[$i + 1] == "XC") {
                $result += 90;
                $i += 1;
            } elseif ($s[$i] === "L") {
                $result += 50;
            } elseif ($s[$i] . $s[$i + 1] == "XL") {
                $result += 40;
                $i += 1;
            } elseif ($s[$i] === "X") {
                $result += 10;
            } elseif ($s[$i] . $s[$i + 1] == "IX") {
                $result += 9;
                $i += 1;
            } elseif ($s[$i] === "V") {
                $result += 5;
            } elseif ($s[$i] . $s[$i + 1] == "IV") {
                $result += 4;
                $i += 1;
            } elseif ($s[$i] === "I") {
                $result += 1;
                }
            }
        return ($result);
    }
}
echo(Solution::romanToInt("III"));
