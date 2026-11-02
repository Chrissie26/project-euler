<?php

multiplessum(1000);

function multiplessum($number)
{
    $sum = 0;
    for ($x = 0; $x < $number; $x++) {
        if (($x % 3 == 0) || ($x % 5 == 0)) {
            $sum += $x;
        }
    }
    echo $sum;
}

// Answer: 233168