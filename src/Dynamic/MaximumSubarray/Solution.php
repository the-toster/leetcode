<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\MaximumSubarray;


final class Solution
{
    /** @param int[] $nums */
    function maxSubArray(array $nums): int
    {
        $dp = [0 => $nums[0]];
        for ($i = 1; $i < count($nums); $i++) {
            $dp[$i] = $nums[$i] + ($dp[$i - 1] > 0 ? $dp[$i - 1] : 0);
        }
        return max($dp);
    }
}
