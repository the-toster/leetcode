<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\TribonacciNumber;


final class Solution
{
    function tribonacci(int $n): int
    {
        $d = [0, 1, 1];
        if (isset($d[$n])) {
            return $d[$n];
        }

        for ($i = 3; $i <= $n; $i++) {
            $r = $d[0] + $d[1] + $d[2];
            $d[0] = $d[1];
            $d[1] = $d[2];
            $d[2] = $r;
        }

        return $r;
    }
}
