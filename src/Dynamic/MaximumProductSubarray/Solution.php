<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\MaximumProductSubarray;


final class Solution
{
    /** @param int[] $nums */
    function maxProduct(array $nums): int
    {
        $max = [0 => $nums[0]];
        $min = [0 => $nums[0]];
        for ($i = 1; $i < count($nums); $i++) {
            $n = $nums[$i];
            $withMax = $n * $max[$i - 1];
            $withMin = $n * $min[$i - 1];
            $variants = [$n, $withMax, $withMin];
            $max[$i] = max($variants);
            $min[$i] = min($variants);
        }
        return max($max);
    }
}
