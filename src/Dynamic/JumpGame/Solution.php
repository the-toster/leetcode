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
        $size = count($nums);

        $maxJump = $nums[0];
        for ($i = 0; $i <= $maxJump; $i++) {
            if ($i === $size - 1) {
                return true;
            }

            if ($i < $size && $i > 0) {
                $rest = array_slice($nums, $i);
                if ($this->canJump($rest)) {
                    return true;
                }
            }
        }

        return false;
    }
}
