<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\DeleteAndEarn;


final class Solution
{

    /**
     * @param int[] $nums
     */
    public function deleteAndEarn(array $nums): int
    {
        $dp = [0 => [0, 0]];
        $prev = 0;
        sort($nums);
        for ($i = 0; $i < count($nums); $i++) {
            $maxPrev = max($dp[$prev]);
            $n = $nums[$i];
            $sum = $n;
            while ($n === ($nums[$i + 1] ?? -1)) {
                $sum += $n;
                $i = $i + 1;
            }

            $prevAnsw = $prev === $n - 1 ? $dp[$prev][0] : $maxPrev;
            $dp[$n] = [$maxPrev, $sum + $prevAnsw];
            $prev = $n;
        }

        return max($dp[$prev]);
    }

}
