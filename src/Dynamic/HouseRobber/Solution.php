<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\HouseRobber;


final class Solution
{
    /**
     * @param int[] $nums
     */
    function rob(array $nums): int
    {
        $n = count($nums);
        if ($n < 3) {
            $nums[] = 0;
            return max($nums);
        }

        return max(
            $nums[0] + $this->rob(array_slice($nums, 2)),
            $nums[1] + $this->rob(array_slice($nums, 3))
        );
    }
}
