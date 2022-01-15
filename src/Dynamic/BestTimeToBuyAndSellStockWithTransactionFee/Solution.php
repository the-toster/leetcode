<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\BestTimeToBuyAndSellStockWithTransactionFee;


final class Solution
{
    /** @param int[] $prices */
    function maxProfit(array $prices, int $fee): int
    {
        $last = count($prices) - 1;
        $wait = [0 => 0];
        $hold = [0 => -$prices[0]];
        $no_hold = [0 => PHP_INT_MIN];

        for ($i = 1; $i <= $last; $i++) {
            $cur = $prices[$i];
            $prevI = $i - 1;
            $wait[$i] = max($wait[$prevI], $no_hold[$prevI]);
            $hold[$i] = max($hold[$prevI], $no_hold[$prevI] - $cur, $wait[$prevI] - $cur);
            $no_hold[$i] = max($no_hold[$prevI], $hold[$prevI] + $cur - $fee);
        }

        return max($no_hold[$last], $wait[$last]);
    }
}
