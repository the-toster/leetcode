<?php

declare(strict_types=1);

namespace TheToster\Leetcode\PalindromePartitioning;


final class Solution
{
    /**
     * @return string[][]
     */
    function partition(string $s): array
    {
        if (strlen($s) === 1) {
            return [[$s]];
        }

        $variants = [];
        for ($i = 1; $i <= strlen($s); $i++) {
            $sub = substr($s, 0, $i);
            if ($this->isPalindrome($sub)) {
                foreach ($this->partition(substr($s, $i)) as $subPartition) {
                    $variants[] = array_merge([$sub], $subPartition);
                }
            }
        }
        return $variants;
    }

    private function isPalindrome(string $sub): bool
    {
        return $sub === strrev($sub);
    }
}
