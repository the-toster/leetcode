<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\MaximumSumCircularSubarray;


final class Solution
{
    /** @param int[] $nums */
    function maxSubarraySumCircular(array $nums): int
    {
        if (max($nums) < 0) {
            return max($nums);
        }

        $dp = [0 => $nums[0]];
        $dpMin = [0 => $nums[0]];
        for ($i = 1; $i < count($nums); $i++) {
            $dp[$i] = $nums[$i] + ($dp[$i - 1] > 0 ? $dp[$i - 1] : 0);
            $dpMin[$i] = $nums[$i] + ($dpMin[$i - 1] < 0 ? $dpMin[$i - 1] : 0);
        }
        $max = max($dp);
        $min = min($dpMin);
        return max($max, $this->sum($nums) - $min);
    }

    private function sum(array $nums): int
    {
        $r = 0;
        foreach ($nums as $n) {
            $r += $n;
        }

        return $r;
    }
}
