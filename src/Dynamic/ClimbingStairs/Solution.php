<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\ClimbingStairs;


final class Solution
{
    /**
     *
     * You are climbing a staircase. It takes n steps to reach the top.
     * Each time you can either climb 1 or 2 steps. In how many distinct ways can you climb to the top?
     *
     * Input: n = 3
     * Output: 3
     * Explanation: There are three ways to climb to the top.
     * 1. 1 step + 1 step + 1 step
     * 2. 1 step + 2 steps
     * 3. 2 steps + 1 step
     */
    public function climbStairs($n)
    {
        $dp = [1 => 1, 2 => 2];

        if (isset($dp[$n])) {
            return $dp[$n];
        }

        for ($i = 3; $i <= $n; $i++) {
            $dp[$i] = $dp[$i - 1] + $dp[$i - 2];
        }

        return $dp[$n];
    }
}
