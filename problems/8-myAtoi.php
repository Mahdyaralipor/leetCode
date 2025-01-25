<?php

    function myAtoi($s)
    {
        $INT_MIN = -pow(2, 31);
        $INT_MAX = pow(2, 31) - 1;

        $s = ltrim($s);
        if (empty($s)) {
            return 0;
        }

        $sign = 1;
        $index = 0;
        if ($s[0] === '-' || $s[0] === '+') {
            $sign = $s[0] === '-' ? -1 : 1;
            $index++;
        }

        $number = 0;
        while ($index < strlen($s) && ctype_digit($s[$index])) {
            $number = $number * 10 + intval($s[$index]);
            $index++;

            if ($number * $sign <= $INT_MIN) {
                return $INT_MIN;
            }
            if ($number * $sign >= $INT_MAX) {
                return $INT_MAX;
            }
        }

        return $number * $sign;
    }

    echo myAtoi("42");
    echo "\n";
    echo myAtoi("   -042");
    echo "\n";
    echo myAtoi("1337c0d3");
    echo "\n";
    echo myAtoi("0-1");
    echo "\n";
    echo myAtoi("words and 987");