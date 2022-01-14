<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\BestTimeToBuyAndSellStockWithTransactionFee;


final class Solution
{
    /** @param int[] $prices */
    function maxProfit(array $prices, int $fee): int
    {
        $last = count($prices) - 1;
        $hold = [0 => -($prices[0] + $fee)];
        $no_hold = [0 => PHP_INT_MIN];

        for ($i = 1; $i <= $last; $i++) {
            $cur = $prices[$i];
            $prevI = $i - 1;

            $no_hold[] = max($no_hold[$prevI], $hold[$prevI] + $cur);
            $hold[] = max($hold[$prevI], $no_hold[$prevI] - $cur - $fee);
        }

        return max($no_hold[$last], 0);
    }
}
