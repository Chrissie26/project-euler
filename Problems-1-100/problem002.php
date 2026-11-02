<?php

fibonacci(4000000);

function fibonacci($number)
{
    $sum = 0;
    $fibcur = 0;
    $fibprev1 = 1;
    $fibprev2 = 1;
    while ($fibcur  < $number) {
        $fibcur = $fibprev1 + $fibprev2;
        if ($fibcur % 2 == 0) {
            $sum += $fibcur;
        }
        $fibprev1 = $fibprev2;
        $fibprev2 = $fibcur;
    }
    echo $sum;
}


// Answer: 4613732