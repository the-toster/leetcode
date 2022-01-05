<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\DeleteAndEarn;


final class Solution
{
    private $cache = [];

    /**
     * @param int[] $nums
     */
    public function deleteAndEarn(array $nums): int
    {
        sort($nums);
        $counted = [];
        foreach ($nums as $n) {
            $counted[$n] = ($counted[$n] ?? 0) + 1;
        }

        $sumUsedK = $sumAvoidedK = 0;
        $prev = -1;
        foreach ($counted as $k => $count) {
            $maxOnPreviousStep = max($sumAvoidedK, $sumUsedK);
            $sumForCurrent = $k * $count;

            if ($k === $prev + 1) {
                // it near to previous, so if we take current, we should not take previous
                $sumUsedK = $sumForCurrent + $sumAvoidedK;
                // what if we take previous? it reset current, so max is max from previous
                $sumAvoidedK = $maxOnPreviousStep;
            } else {
                // we take both
                $sumUsedK = $sumForCurrent + $maxOnPreviousStep;
                // or we skip current
                $sumAvoidedK = $maxOnPreviousStep;
            }

            $prev = $k;
        }

        return max($sumUsedK, $sumAvoidedK);
    }


}
