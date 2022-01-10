<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\MaximumLengthOfSubarrayWithPositiveProduct;


final class Solution
{
    /** @param int[] $nums */
    function getMaxLen(array $nums): int
    {
        $p = [0 => $nums[0] > 0 ? 1 : 0];
        $n = [0 => $nums[0] < 0 ? 1 : 0];

        for ($i = 1; $i < count($nums); $i++) {
            $current = $nums[$i];
            $prevP = $p[$i - 1];
            $prevN = $n[$i - 1];
            if ($current > 0) {
                $p[$i] = $prevP + 1;
                $n[$i] = $prevN > 0 ? $prevN + 1 : 0;
            }
            if ($current < 0) {
                $n[$i] = $prevP + 1;
                $p[$i] = $prevN > 0 ? $prevN + 1 : 0;
            }
            if ($current === 0) {
                $p[$i] = 0;
                $n[$i] = 0;
            }
        }

        return max($p);
    }
}
