<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\MaximumScoreFromPerformingMultiplicationOperations;


final class Solution
{
    /**
     * @param int[] $nums
     * @param int[] $multipliers
     */
    public function maximumScore(array $nums, array $multipliers): int
    {
        $size = count($multipliers);
        $dp = array_fill(0, $size + 1, array_fill(0, $size + 1, 0));
        $nSize = count($nums);

        for ($i = $size - 1; $i >= 0; $i--) {
            for ($left = $i; $left >= 0; $left--) {
                $right = $nSize - 1 - ($i - $left);
                $m = $multipliers[$i];
                $nL = $nums[$left];
                $nR = $nums[$right];
                $dp[$i][$left] = max(
                    $nL * $m + $dp[$i + 1][$left + 1],
                    $nR * $m + $dp[$i + 1][$left]
                );
            }
        }
        return $dp[0][0];
    }

    private function calc(array $nums, array $multipliers, int $i, int $left): int
    {
        $size = count($multipliers);
        if ($size === $i) {
            return 0;
        }
        $right = count($nums) - 1 - ($i - $left);
        $fromRight = $multipliers[$i] * $nums[$right];
        $fromLeft = $multipliers[$i] * $nums[$left];

        return max(
            $fromRight + $this->calc($nums, $multipliers, $i + 1, $left),
            $fromLeft + $this->calc($nums, $multipliers, $i + 1, $left + 1)
        );
    }
}
