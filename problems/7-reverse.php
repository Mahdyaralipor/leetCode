<?php

    function reverse(int $x): int {

        $INT_MIN = -pow(2, 31);
        $INT_MAX = pow(2, 31) - 1;
        
        $result = 0;
        $sign = $x < 0 ? -1 : 1;
        $x = abs($x);

        while ($x != 0) {
            $digit = $x % 10;
            $x = intdiv($x, 10);

            if ($result > intdiv($INT_MAX, 10) || 
            ($result == intdiv($INT_MAX, 10) && $digit > 7)) {
                return 0;
            }
            if ($result < intdiv($INT_MIN, 10) || 
            ($result == intdiv($INT_MIN, 10) && $digit > 8)) {
                return 0;
            }

            $result = $result * 10 + $digit;
        }

        return $result * $sign;
    }


    var_dump(reverse(-1230));