<?php

declare(strict_types=1);

namespace TheToster\Leetcode\Median;


final class Solution
{
    /**
     * @param int[] $nums1
     * @param int[] $nums2
     * @return float
     */
    public function findMedianSortedArrays(array $nums1, array $nums2): float
    {
        $merged = array_merge($nums1, $nums2);

        $size = count($merged);
        $middle = (int)($size / 2);
        $m = $this->quickSelect($merged, $middle);
        if(count($merged) % 2 === 0) {
           return ($m + $this->quickSelect($merged, $middle - 1)) / 2;
        }

        return $m;
    }

    private function quickSelect(array $xs, int $n): float
    {
        $size = count($xs);

        if ($size === 1) {
            return $xs[0];
        }

        $pivot = (int)($size / 2);
        [$l, $e, $g] = $this->splitList($xs, $pivot);

        if ($n < count($l)) {
            return $this->quickSelect($l, $n);
        }

        if ($n < count($l) + count($e)) {
            return $e[0];
        }

        return $this->quickSelect($g, $n - count($l) - count($e));
    }

    private function splitList(array $xs, int $index): array
    {
        $l = $e = $g = [];

        foreach ($xs as $x) {
            $ord = $x <=> $xs[$index];
            if ($ord > 0) {
                $g[] = $x;
            } elseif ($ord < 0) {
                $l[] = $x;
            } else {
                $e[] = $x;
            }
        }

        return [$l, $e, $g];
    }

}
