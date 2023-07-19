<?php
class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    static function intToRoman(int $num): string
    {
        $rom = "";
        while ($num !== 0) {
            if ($num / 1000 >= 1) {
                for ($r = 1; $r <= $num / 1000; $num = $num - 1000) {
                    $rom = $rom . "M";
                }
            } elseif ($num / 900 >= 1) {
                $rom = $rom . "CM";
                $num = $num - 900;
            } elseif ($num / 500 >= 1) {
                $rom = $rom . "D";
                $num = $num - 500;
            } elseif ($num / 400 >= 1) {
                $rom = $rom . "CD";
                $num = $num - 400;
            } elseif ($num / 100 >= 1) {
                for ($r = 1; $r <= $num / 100; $num = $num - 100) {
                    $rom = $rom . "C";
                }
            } elseif ($num / 90 >= 1) {
                $rom = $rom . "XC";
                $num = $num - 90;
            } elseif ($num / 50 >= 1) {
                $rom = $rom . "L";
                $num = $num - 50;
            } elseif ($num / 40 >= 1) {
                $rom = $rom . "XL";
                $num = $num - 40;
            } elseif ($num / 10 >= 1) {
                for ($r = 1; $r <= $num / 10; $num = $num - 10) {
                    $rom = $rom . "X";
                }
            } elseif ($num / 9 >= 1) {
                $rom = $rom . "IX";
                $num = $num - 9;
            } elseif ($num / 5 >= 1) {
                $rom = $rom . "V";
                $num = $num - 5;
            } elseif ($num / 4 >= 1) {
                $rom = $rom . "IV";
                $num = $num - 4;
            } else {
                for ($r = 0; $r < $num; $num = $num - 1) {
                    $rom = $rom . "I";
                }
            }
        }
        return ($rom);
    }
}
echo(Solution::intToRoman(11));
