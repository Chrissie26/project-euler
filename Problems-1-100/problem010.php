<?php

sumprimenumbers(2000000);

function sumprimenumbers($number)
{
    $total = 0;
    for ($x = 1; $x < $number; $x++) {
        if (isprimenumber($x)) {
            $total += $x;
        }
    }
    echo $total;
}

function isprimenumber($number)
{
    if ($number == 1)
        return false;

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0)
            return false;
    }
    return true;
}


// Answer: 142913828922