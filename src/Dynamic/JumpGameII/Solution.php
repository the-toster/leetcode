<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\JumpGameII;


final class Solution
{
    /** @param int[] $nums */
    function jump(array $nums): int
    {
        $size = count($nums);
        if ($size === 1) {
            return 0;
        }

        for ($i = 0; $i < $size; $i++) {
            if ($nums[$i] >= $size - $i - 1) {
                return 1 + $this->jump(array_slice($nums, 0, $i + 1));
            }
        }

        throw new \InvalidArgumentException('Unjumpable');
    }
}
