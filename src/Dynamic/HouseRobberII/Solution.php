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
        if (count($nums) === 1) {
            return $nums[0];
        }
        $startsFromFirst = array_slice($nums, 0, -1);
        $other = array_slice($nums, 1);
        return max(
            $this->rob1($startsFromFirst),
            $this->rob1($other)
        );
    }

    public function rob1(array $nums): int
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
