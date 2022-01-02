<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\FibonacciNumber;


final class Solution
{
    function fib($n)
    {
        $a = 0;
        $b = 1;

        if ($n === 0) {
            return $a;
        }

        if ($n === 1) {
            return $b;
        }

        for ($i = 2; $i <= $n; $i++) {
            $r = $a + $b;
            $a = $b;
            $b = $r;
        }

        return $r;
    }
}
