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
        $merged = $this->merge($nums1, $nums2);
        return $this->median($merged);
    }

    private function merge(array $n1, array $n2): array
    {
        $r = [];
        while (true) {
            if (count($n1) === 0) {
                foreach ($n2 as $v) {
                    $r[] = $v;
                }
                return $r;
            }

            if (count($n2) === 0) {
                foreach ($n1 as $v) {
                    $r[] = $v;
                }
                return $r;
            }

            if ($n1[0] < $n2[0]) {
                $r[] = array_shift($n1);
            } else {
                $r[] = array_shift($n2);
            }
        }
    }

    private function median(array $arr): float
    {
        $n = count($arr);

        if ($n % 2 === 0) {
            $half = $n / 2;
            return ($arr[$half - 1] + $arr[$half]) / 2;
        }

        return $arr[floor($n / 2)];
    }
}
