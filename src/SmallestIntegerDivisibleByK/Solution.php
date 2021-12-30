<?php

declare(strict_types=1);

namespace TheToster\Leetcode\SmallestIntegerDivisibleByK;


final class Solution
{
    function smallestRepunitDivByK(int $k): int {
        $remainder = 1;
        $len = 1;
        $alreadyChecked = [];
        while($remainder % $k !== 0) {
            $n = $remainder * 10 + 1;
            $remainder = $n % $k;

            if(isset($alreadyChecked[$remainder])) {
                return -1;
            }
            $alreadyChecked[$remainder] = true;
            $len++;

        }

        return $len;
    }
}
