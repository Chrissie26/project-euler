<?php

primefactors(600851475143);

function primefactors($number)
{
    $prime = 0;
    for ($x = 2; $x <= $number; $x++) {
        if (!is_float($number / $x)) {
            // echo $x . PHP_EOL;
            $number = $number / $x;
            $prime = $x;
        }
    }
    echo $prime;
}

// Answer: 6857