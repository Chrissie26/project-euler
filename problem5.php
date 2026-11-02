<?php

evenlydivisible(20);

function evenlydivisible($number)
{
    $x = 1;
    $posnum = $number;
    while ($x <= $number) {
        if (!is_float($posnum / $x)) {
            if ($x == 20) {
                echo "NUMBER";
            }
            $x++;
        } else {
            if ($x > 17) {
                echo $posnum . " " . $x . " ";
            }
            $posnum++;
            $x = 1;
        }
    }
    echo $posnum;
}

// Answer: 232792560