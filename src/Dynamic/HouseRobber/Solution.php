<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\HouseRobber;


final class Solution
{
    /**
     * @param int[] $nums
     */
    function rob(array $nums): int
    {
        $s1 = $s2 = 0;
        foreach ($nums as $i => $v) {
            if ($i % 2) {
                $s1 += $v;
            } else {
                $s2 += $v;
            }
        }
        return max($s1, $s2);
    }
}
