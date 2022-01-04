<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\HouseRobber;


final class Solution
{
    /**
     * @param int[] $nums
     */

    public function rob(array $nums): int
    {
        $dp = [
            0 => 0,
            1 => $nums[0],
            2 => max($nums[0], $nums[1] ?? 0)
        ];
        $n = count($nums);
        for ($i = 3; $i <= $n; $i++) {
            $dp[$i] = max($nums[$i - 1] + $dp[$i - 2], $nums[$i - 2] + $dp[$i - 3]);
        }

        return $dp[$n];
    }
}
