<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\JumpGame;


final class Solution
{
    /**
     * @param int[] $nums
     * @return bool
     */
    private $cache = [];

    function canJump(array $nums): bool
    {
        $this->cache = [];
        return $this->calc($nums, 0);
    }

    private function calc(array $nums, int $from): bool
    {
        if (isset($this->cache[$from])) {
            return $this->cache[$from];
        }

        $maxJump = $nums[$from];
        if ($maxJump >= count($nums) - $from - 1) {
            return $this->cache[$from] = true;
        }

        for ($i = 1; $i <= $maxJump; $i++) {
            if ($this->calc($nums, $from + $i)) {
                return $this->cache[$from] = true;
            }
        }

        return $this->cache[$from] = false;
    }
}
