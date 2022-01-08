<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\JumpGameII;


final class Solution
{
    /** @var int[] $nums */
    private $nums = [];

    /** @param int[] $nums */
    function jump(array $nums): int
    {
        $this->nums = $nums;
        return $this->calc(count($nums));
    }

    function calc(int $size): int
    {
        if ($size === 1) {
            return 0;
        }

        for ($i = 0; $i < $size; $i++) {
            if ($this->nums[$i] >= $size - $i - 1) {
                return 1 + $this->calc($i + 1);
            }
        }

        throw new \InvalidArgumentException('Unjumpable');
    }
}
