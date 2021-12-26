<?php

declare(strict_types=1);

namespace TheToster\Leetcode\KClosestPoints;


class Solution {

    /**
     * @param Integer[][] $points
     * @param Integer $k
     * @return Integer[][]
     */
    function kClosest($points, $k) {
        $q = new \SplPriorityQueue();
        foreach ($points as $point) {
            $distance = pow($point[0], 2) + pow($point[1], 2);
            $q->insert($point, -1 * $distance);
        }

        $q->setExtractFlags(\SplPriorityQueue::EXTR_DATA);
        $r = [];
        for($i = 0; $i < $k; $i++) {
            $r[] = $q->extract();
        }
        return $r;
    }
}
