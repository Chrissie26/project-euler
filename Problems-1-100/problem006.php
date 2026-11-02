<?php

difference(100);

function difference($number)
{
    $x = sumsquares($number);
    $y = squaresum($number);
    echo $y - $x;
}

function sumsquares($number)
{
    $sum = 0;
    for ($x = 1; $x <= $number; $x++) {
        $sum += pow($x, 2);
    }
    return $sum;
}

function squaresum($number)
{
    $sum = 0;
    for ($x = 1; $x <= $number; $x++) {
        $sum += $x;
    }
    $sum = pow($sum, 2);
    return $sum;
}


// Answer = 25164150