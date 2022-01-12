<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\BestTimeToBuyAndSellStock;


final class Solution
{
    /** @var int[] $prices */
    function maxProfit(array $prices): int
    {
        $last = count($prices) - 1;
        $max = [$last => $prices[$last]];
        for ($i = $last - 1; $i > 0; $i--) {
            $max[$i] = max($prices[$i], $max[$i + 1]);
        }

        $min = $prices[0];
        $profit = 0;
        for ($i = 1; $i <= $last; $i++) {
            $min = min($prices[$i], $min);
            $profit = max($profit, $max[$i] - $min);
        }

        return $profit;
    }
}
