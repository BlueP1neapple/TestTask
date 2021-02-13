<?php
namespace Dmitry\FibNumb {
    class FibonacciNumbers
    {
        public static function fn($number): string
        {
            $arr = array(0, 1);
            for ($i = 0; $i < ($number - 2); $i++) {
                $cur = $arr[$i] + $arr[$i + 1];
                array_push($arr, $cur);
            }
            return implode(", ", $arr);

        }
    }
}