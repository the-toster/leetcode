<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\BestTimeToBuyAndSellStockII;


final class Solution
{
    /** @param int[] $prices */
    function maxProfit(array $prices): int
    {
        $r = 0;
        for ($i = 1; $i < count($prices); $i++) {
            $cur = $prices[$i];
            $prev = $prices[$i - 1];
            if ($cur > $prev) {
                $r += $cur - $prev;
            }
        }
        return $r;
    }
}
