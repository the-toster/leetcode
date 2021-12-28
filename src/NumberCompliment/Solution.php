<?php

declare(strict_types=1);

namespace TheToster\Leetcode\NumberCompliment;


final class Solution
{
    /**
     * @param Integer $num
     * @return Integer
     */
    function findComplement($num) {
        $mask = ~1 << floor(log($num, 2));
        return ~ $num ^ $mask;
    }
}
