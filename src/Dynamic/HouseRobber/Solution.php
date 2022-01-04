<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\HouseRobber;


final class Solution
{
    /**
     * @param int[] $nums
     */

    private $cache = [];

    public function rob(array $nums): int
    {
        $this->cache = [];
        return $this->maximumOnIthHouse($nums, count($nums));
    }

    private function maximumOnIthHouse(array $nums, int $n): int
    {
        if ($n < 1) {
            return 0; // zero houses, nothing
        }

        if ($n === 1) {
            return $nums[0]; //first house, only first
        }

        if (isset($this->cache[$n])) {
            return $this->cache[$n];
        }

        // if it is more houses, maximum series can end either on last or pre last house:
        // last are robbed  = last sum + everything except pre-last
        $b1 = $nums[$n - 1] + $this->maximumOnIthHouse($nums, $n - 2);

        // pre-last are robbed = pre-last sum + everything except pre-pre-last
        $b2 = $nums[$n - 2] + $this->maximumOnIthHouse($nums, $n - 3);

        return $this->cache[$n] = max($b1, $b2);
    }
}
