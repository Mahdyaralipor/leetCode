<?php
    function gcdOfStrings($str1, $str2) {
        return ($str1 . $str2 === $str2 . $str1) 
            ? substr($str1, 0, gcd(strlen($str1), strlen($str2))) 
            : "";
    }

    function gcd($a, $b) {
        return $b == 0 ? $a : gcd($b, $a % $b);
    }