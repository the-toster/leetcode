<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\MinCostClimbingStairs;


final class Solution
{
    private $cache = [];

    /**
     * You are given an integer array cost where cost[i] is the cost of ith step on a staircase.
     * Once you pay the cost, you can either climb one or two steps.
     *
     * You can either start from the step with index 0, or the step with index 1.
     *
     * Return the minimum cost to reach the top of the floor.
     * Input: cost = [10,15,20]
     * Output: 15
     * Explanation: You will start at index 1.
     * - Pay 15 and climb two steps to reach the top.
     * The total cost is 15.
     * 2 <= cost.length <= 1000
     * @param int[] $cost
     */
    function minCostClimbingStairs($cost)
    {
        $size = count($cost);
        $dp = [0 => $cost[0], 1 => $cost[1]];

        for ($i = 2; $i < $size; $i++) {
            $dp[$i] = $cost[$i] + min($dp[$i - 1], $dp[$i - 2]);
        }

        return min($dp[$size - 1], $dp[$size - 2]);
    }
}
