<?php

primenumber(10001);

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


function primenumber($number)
{
    $primenumbers = [];
    $i = 0;
    for ($j = 2; $i < $number; $j++) {
        if (isprimenumber($j)) {
            $primenumbers[] = $j;
            $i++;
        }
    }
    echo end($primenumbers);
}

// Answer = 104743