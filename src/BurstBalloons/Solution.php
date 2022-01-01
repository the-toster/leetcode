<?php

declare(strict_types=1);

namespace TheToster\Leetcode\BurstBalloons;


final class Solution
{
    /**
     * You are given n balloons, indexed from 0 to n - 1.
     * Each balloon is painted with a number on it represented by an array nums.
     * You are asked to burst all the balloons.
     * If you burst the ith balloon, you will get nums[i - 1] * nums[i] * nums[i + 1] coins.
     * If i - 1 or i + 1 goes out of bounds of the array, then treat it as if there is a balloon with a 1 painted on it.
     * Return the maximum coins you can collect by bursting the balloons wisely.
     *
     * Input: nums = [3,1,5,8]
     * Output: 167
     * Explanation:
     * nums = [3,1,5,8] --> [3,5,8] --> [3,8] --> [8] --> []
     * coins =  3*1*5    +   3*5*8   +  1*3*8  + 1*8*1 = 167
     *
     * @param int[] $nums
     */
    function maxCoins(array $nums): int
    {
        if (count($nums) === 1) {
            return $nums[0];
        }

        $coins = [];
        for ($i = 0; $i < count($nums); $i++) {
            $coins[$i] = $this->calcForI($i, $nums);
        }
        $maxSum = max($coins);

        $maxIndexes = [];
        foreach ($coins as $i => $sum) {
            if ($sum === $maxSum) {
                $maxIndexes[$i] = $nums[$i];
            }
        }

        asort($maxIndexes);
        $index = array_keys($maxIndexes)[0];

        return $coins[$index] + $this->maxCoins($this->withoutI($index, $nums));
    }

    private function calcForI($i, $nums): int
    {
        return ($nums[$i - 1] ?? 1) * $nums[$i] * ($nums[$i + 1] ?? 1);
    }

    private function withoutI($i, $nums): array
    {
        array_splice($nums, $i, 1);
        return $nums;
    }
}
