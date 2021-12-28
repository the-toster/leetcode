<?php

declare(strict_types=1);

namespace TheToster\Leetcode\KClosestPoints;


class Solution
{

    /**
     * @param Integer[][] $points
     * @param Integer $k
     * @return Integer[][]
     */
    function kClosest($points, $K)
    {
        $distanceArray = [];

        foreach($points as $key => $value) {
            $distanceArray[$key] = (pow($value[0],2) + pow($value[1], 2));
        }
        asort($distanceArray);
        $distanceArray = array_slice($distanceArray, 0, $K, true);
        $resultArray = [];

        foreach ($distanceArray as $key => $value) {
            $resultArray[] = $points[$key];
        }

        return $resultArray;
    }

    private function quickSelect($xs, $n): array
    {
        $size = count($xs);

        if ($size === 1) {
            return $xs[0];
        }

        $pivot = (int)($size % 2 ? floor($size / 2) : $size / 2 - 1);
        [$l, $e, $g] = $this->splitList($xs, $pivot);

        if ($n < count($l)) {
            return $this->quickSelect($l, $n);
        }

        if ($n < count($l) + count($e)) {
            return $e[0];
        }

        return $this->quickSelect($g, $n - count($l) - count($e));
    }

    private function splitList($xs, $index): array
    {
        $l = $e = $g = [];

        foreach ($xs as $x) {
            $ord = $this->compare($x, $xs[$index]);
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

    private function compare($a, $b): int
    {
        return $a[0] ** 2 + $a[1] ** 2 <=> $b[0] ** 2 + $b[1] ** 2;
    }
}
