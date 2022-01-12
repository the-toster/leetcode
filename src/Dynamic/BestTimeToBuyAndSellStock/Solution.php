<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Dynamic\BestTimeToBuyAndSellStock;


final class Solution
{
    /** @var int[] $prices */
    function maxProfit(array $prices): int
    {
        $min = PHP_INT_MAX;
        $profit = 0;
        $size = count($prices);
        for ($i = 0; $i < $size; $i++) {
            $price = $prices[$i];
            if ($price < $min) {
                $min = $price;
                continue;
            }
            $t = $price - $min;
            if ($t > $profit) {
                $profit = $t;
            }
        }

        return $profit;
    }
}
