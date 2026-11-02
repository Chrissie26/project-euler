<?php

pythagorean(1000);

function pythagorean($number)
{
    for ($x = 2; $x < $number; $x++) {
        for ($y = 1; $y < $x; $y++) {
            $sum = pow($y, 2) + pow($x, 2);
            $c = sqrt($sum);
            if (fmod($c, 1) == 0 && $c > $x) {
                $total = $x + $y + $c;
                if ($total == $number) {
                    echo "a = " . $x . " b = " . $y . " c = " . $c . PHP_EOL;
                    echo $x * $y * $c;
                }
            }
        }
    }
}


// Answer = product: 31875000