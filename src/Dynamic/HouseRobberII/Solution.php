<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\HouseRobberII;


final class Solution
{
    /**
     * @param int[] $nums
     */
    function rob(array $nums): int
    {
        $dp = [
            0 => 0,
            1 => $nums[0] ?? 0,
            2 => max($nums[0] ?? 0, $nums[1] ?? 0)
        ];

        if (isset($dp[count($nums)])) {
            return $dp[count($nums)];
        }

        return max(
            $nums[0] + $this->rob(array_slice($nums, 2, -1)),
            $nums[1] + $this->rob(array_slice($nums, 3)),
            $this->rob(array_slice($nums, 2))

        );
    }
}
