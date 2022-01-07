<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\JumpGame;


final class Solution
{
    /**
     * @param int[] $nums
     * @return bool
     */
    function canJump(array $nums): bool
    {
        $dist = 0;
        for ($i = 0; $i <= $dist; $i++) {
            $dist = max($dist, $i + $nums[$i]);
            if ($dist >= count($nums) - 1) {
                return true;
            }
        }
        return false;
    }
}
