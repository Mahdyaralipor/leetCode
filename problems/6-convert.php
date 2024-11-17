<?php

    function convert ($s, $numRows) {

        if ($numRows === 1) return $s;

        $rows = array_fill(0, min($numRows, strlen($s)), "");
        $currentRow = 0;
        $goingDown = false;
    
        for ($i = 0; $i < strlen($s); $i++) {
            $rows[$currentRow] .= $s[$i];
    

            if ($currentRow === 0 || $currentRow === $numRows - 1) {
                $goingDown = !$goingDown;
            }
    
            $currentRow += $goingDown ? 1 : -1;
        }
    
        $result = implode("", $rows);
        return $result;
    }
    
    $s1 = "PAYPALISHIRING";
    $numRows1 = 3;
    $numRows2 = 4;
    $s2 = "A";
    $numRows3 = 1;
    
    echo convert($s1, $numRows1) . PHP_EOL;
    echo convert($s1, $numRows2) . PHP_EOL;
    echo convert($s2, $numRows3) . PHP_EOL;
