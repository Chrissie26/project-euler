<?php


palindrome(3);

function palindrome($number)
{
    $power = pow(10, $number - 1);
    $largest = 0;
    for ($x = $power; $x < $power * 10; $x++) {
        for ($y = $power; $y < $power * 10; $y++) {
            $product = $x * $y;
            $str = strval($product);
            if (strlen($str) % 2 == 0) {
                $num = 0;
            } else {
                $num = 1;
            }
            $beg = substr($str, 0, (strlen($str) + $num) / 2);
            $end = strrev(substr($str, - ((strlen($str) + $num) / 2)));
            if ($beg === $end) {
                if ($product > $largest) {
                    $largest = $product;
                    echo $product . " is palindrome " . $x . " " . $y . PHP_EOL;
                }
            }
        }
    }
}

// Wrong answers: 99000099

// Answer: 906609