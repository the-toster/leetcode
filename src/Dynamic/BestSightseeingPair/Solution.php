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

        $size = count($values);
        $j = $size - 1;
        $bestRight = [$j => $values[$j] - $j];
        for ($j--; $j > 0; $j--) {
            $bestRight[$j] = max($values[$j] - $j, $bestRight[$j + 1]);
        }

        $max = 0;
        for ($i = 0; $i < $size - 1; $i++) {
            $currentLeft = $values[$i] + $i;
            $bestScoreWithCurrentLeft = $currentLeft + $bestRight[$i + 1];
            $max = max($bestScoreWithCurrentLeft, $max);
        }

        return $max;
    }
}
