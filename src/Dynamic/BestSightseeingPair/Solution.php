<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\BestSightseeingPair;


final class Solution
{
    /** @param int[] $values */
    function maxScoreSightseeingPair(array $values): int
    {
        // i < j
        // score of a pair
        // values[i] + values[j] + i - j
        // find maximum pair score
        $max = PHP_INT_MIN;
        for ($i = 0; $i < count($values) - 1; $i++) {
            for ($j = $i + 1; $j < count($values); $j++) {
                $max = max(
                    $values[$i] + $values[$j] + $i - $j,
                    $max,
                );
            }
        }
        return $max;
    }
}
